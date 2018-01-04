<?php
namespace App\Http\Controllers\Admin;

use App\Admin\Client;
use App\Admin\Parameter;
use App\Admin\UrlMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
	//查询数据
    public function search(Request $request)
	{
		//查询条数
		$data_num = $request->data_num;
        if($request->data_num == 'all')
        {
            $request->data_num = 999999;
        }
		//查看sql语句
		DB::enableQueryLog();
		$ym = 'http://'.$_SERVER['HTTP_HOST'];
        if(strpos($_SERVER['HTTP_REFERER'],'?'))
        {
            $url = strstr($_SERVER['HTTP_REFERER'],'?',true);
        }else{
            $url = $_SERVER['HTTP_REFERER'];
        }
        $ks = strpos($url,$ym);
        $sLeng = strlen($ym);
        $url = substr_replace($url,'',$ym,$sLeng);
		if(($url == '/admin' && empty($request -> search_time)) || $url == '/laravel/public/admin' && empty($request -> search_time))
        {
            $nowDay = date('Y-m-d',time());
            $minDay = date('Y-m-d',strtotime('+1 day'));
            $request -> search_time = $nowDay.' ~ '.$minDay;
        }
		
		//处理登录的域名,分解成3个后台处理数据
		$se_url_id = '';
		//当搜索平台的条件不等于0的时候处理平台选项
		//var_dump($_SERVER);die;
		$host = $_SERVER['HTTP_HOST'];
		/*switch($host){
			case 'ww.qltzz.cn':
				$mark = '360';
				break;
			case 'ww.hxtz126.cn':
				$mark = '搜狗';
				break;
			case 'ww.haodai01.com':
				$mark = '神马';
				break;
		}*/
		$mark = getMark($host);
        if($mark == '')
        {
            $se_url_id = UrlMessage::select(['id'])->get();
        }else{
            $se_url_id = UrlMessage::select(['id'])->where('url_se',$mark)->get();
        }
        if(!$se_url_id->isEmpty())
        {
            $se_url_id = $se_url_id ->toArray();
        }
		//var_dump($se_url_id);
		if(!empty($request -> search_time) || !empty($request -> search_word) )
        {
			//当搜索时间不为空时,处理搜索时间
            if (!empty($request->search_time)) {
                $search_time = explode(' ~ ', $request->search_time);
                //开始搜索时间
                $start_time = strtotime($search_time[0]);
                //结束搜索事件
                $last_time = strtotime($search_time[1]);
            }
			//根据关键词 获取  路由标志
            $url_id = '';
            if(!empty($request -> search_word))
            {
                $url_id = getUrlId($request -> search_word);
            }
            //var_dump($url_id);
			//2个搜索条件全部都有的时候
			//有搜索时间和关键词 搜索平台是必须条件
            if (!empty($request->search_time) && !empty($request->search_word)) 
			{
				$clients = Client::where(function ($query) use ($se_url_id)
				{
					foreach ($se_url_id as $v)
					{
						$query -> orWhere('url',$v['id']);
					}

				})
				->where('add_time', '>', $start_time)
				->where('add_time', '<', $last_time)
				->where(function ($query) use ($request,$url_id) {
					if(getUserRughts() == 1)
					{
						$query
							->orWhere('ip', 'like', '%' . $request->search_word . '%')
							->orWhere('client_name', 'like', '%' . $request->search_word . '%')
							->orWhere('client_phone', 'like', '%' . $request->search_word . '%')
							->orWhere('keyword', 'like', '%' . $request->search_word . '%');
					}else{
						$query
							->orWhere('ip', 'like', '%' . $request->search_word . '%')
							->orWhere('client_name', 'like', '%' . $request->search_word . '%')
							->orWhere('keyword', 'like', '%' . $request->search_word . '%');
					}
					if(!empty($url_id))
					{
						foreach ($url_id as $v)
						{
							$query->orWhere('url',$v['id']);
						}
					}
				})
				->latest('add_time')
				->paginate($request->data_num);
            } else if(!empty($request->search_time) || !empty($request->search_word))
			{
				//有时间作为条件,搜索平台的条件是必须的
				if(!empty($request->search_time))
				{
					$clients = Client::where(function ($query) use ($se_url_id)
						{
							foreach ($se_url_id as $v)
							{
								$query -> orWhere('url',$v['id']);
							}

						})
                        ->where('add_time', '>', $start_time)
                        ->where('add_time', '<', $last_time)
                        ->latest('add_time')
                        ->paginate($request->data_num);
				}
				
				//有搜索关键词作为条件,搜索平台的条件是必须的
				if(!empty($request->search_word))
				{
				    //var_dump($se_url_id);
					$clients = Client::where(function ($query) use ($request,$url_id) {
                            if(getUserRughts() == 1)
                            {
                                $query
                                    ->orWhere('ip', 'like', '%' . $request->search_word . '%')
                                    ->orWhere('client_name', 'like', '%' . $request->search_word . '%')
                                    ->orWhere('client_phone', 'like', '%' . $request->search_word . '%')
                                    ->orWhere('keyword', 'like', '%' . $request->search_word . '%');
                            }else{
                                $query
                                    ->orWhere('ip', 'like', '%' . $request->search_word . '%')
                                    ->orWhere('client_name', 'like', '%' . $request->search_word . '%')
                                    ->orWhere('keyword', 'like', '%' . $request->search_word . '%');
                            }
                            if(!empty($url_id))
                            {
                                foreach ($url_id as $v)
                                {
                                    $query->orWhere('url',$v['id']);
                                }
                            }
                        })->where(function($query) use ($se_url_id){
                            foreach ($se_url_id as $v)
                            {
                                $query -> orWhere('url',$v['id']);
                            }
                        })
                        ->latest('add_time')
                        ->paginate($request->data_num);
				}
			}
			return view('admin1.search',
                [
                    'data' => $clients,
                    'searchOption' => $request->search_time,
                    'searchWord' => $request->search_word,
                    'num' => $request->data_num
                ]
            );
		}else
		{
			//获取当前url
            //拼接要删除的域名,取得laravel的路由
            $ym = 'http://'.$_SERVER['HTTP_HOST'];
            if(isset($_SERVER['HTTP_REFERER']))
            {
                if(strpos($_SERVER['HTTP_REFERER'],'?'))
                {
                    $url = strstr($_SERVER['HTTP_REFERER'],'?',true);
                }else{
                    $url = $_SERVER['HTTP_REFERER'];
                }
                $ks = strpos($url,$ym);
                $sLeng = strlen($ym);
                $url = substr_replace($url,'',$ym,$sLeng);
                //拼接要跳转的路由
                if(strpos($url,'/search'))
                {

                    $url = str_replace('/search','',$url);
                    if(strpos($url,'/laravel/public'))
                    {
                        $url = str_replace('/laravel/public','',$url);
                    }
                    $url .= '/all';

                }
                $url = $url.'?data_num='.$request->data_num;
                return redirect($url)->with([
                    'num' => $request->data_num
                ]);
            }else{
                return redirect('admin');
            }
		}
	}
	
	//删除数据
    public function delClient(Request $request)
    {
        //var_dump($request);die;
        $mark = Client::where('id',$request->id)->delete();
        return $mark;
    }
}






?>