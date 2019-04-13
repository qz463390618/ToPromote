<?php

namespace App\Http\Controllers;

use App\Admin\Client;
use App\Admin\Source;
use App\Admin\UrlMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;


class ClientController extends Controller
{
    //发送验证码
    public function sendAuthCode(Request $request)
    {
        header("Content-type: text/html; charset=utf-8");
        $randStr = str_shuffle('1234567890');
        $rand = substr($randStr,0,6);
        //session(['yzm' => $rand]);
        session()->forget('yzm');
        //session()->forget('yz');
        session(['yzm'=>$rand]);
       // $_SESSION["mbvfcode"]=$rand;
        $url='http://120.78.138.165:9008 ';//系统接口地址
        //$content=URLENCODE("【上海知持】您的验证码是:".$rand.",5分钟后过期，请您及时验证!");
        //$content= "【上海知持】您的验证码是:".$rand.",5分钟后过期，请您及时验证!";
        $content = "%A1%BE%C9%CF%BA%A3%D6%AA%B3%D6%A1%BF%C4%FA%B5%C4%D1%E9%D6%A4%C2%EB%CA%C7%3A{$rand}%2C5%B7%D6%D6%D3%BA%F3%B9%FD%C6%DA%A3%AC%C7%EB%C4%FA%BC%B0%CA%B1%D1%E9%D6%A4%21";
        $username="zlyjjh";//用户名
        $password="emx5MTIzNDU2";//密码百度BASE64加密后密文
        $url=$url."/servlet/UserServiceAPI?method=sendSMS&extenno=&isLongSms=0&username=".$username."&password=".$password."&smstype=2&mobile=".$request->phone."&content=".$content;

        $html = file_get_contents($url);
        //file_put_contents('./a.php',$html.$url);
        //var_dump($_GET);
        if(!strpos($html,"success")){
            //返回验证码
            return '发送成功'.$rand;
        }else{
            echo 400;
        }
    }


    //保存用户数据
    public function addClient(Request $request)
    {
        if(empty(session('yzm')))
        {
            return 102;//session里不存在验证码,所以是验证码已经失效
        }
        if(empty($request -> yzm))
        {
            return 103;//未输入验证码
        }
        if($request -> yzm != session('yzm'))
        {
            return 101;//验证码不正确
        }
        //判断这个用户的ip是否重复
        if(handingIp($_SERVER['REMOTE_ADDR']))
        {
            session()->forget('yzm');
            return 200;
        }
        //处理数据
        $url = $request -> url;
        $count = strpos($url,'http://');
        $url = substr_replace($url,'',$count,7);
        if(strpos($url,'?'))
        {
            $url = strstr($url,'?',true);
        }
        $url = trim($url,'/');
        //
        // $urlId = UrlMessage::select(['id'])->where('url',$url)->first()->toArray()['id'];
        $res = UrlMessage::select(['id'])->where('url',$url)->first();
        $urlId = 0;
        if(!empty($res))
        {   
            $urlId = $res->id;
        }
        DB::beginTransaction();
        try{
            $client = new Client();
            $source = new Source();
            //获取搜索引擎和关键词
            $sourceInfo = getKeyWord($request -> sourceUrl);

            //判断手机号是否存在
            $data = Client::all()->where('client_phone',$request->phone)->toArray();
            //判断手机号是否重复
            if(count($data) != 0)
            {
                $request->name = $request->name.'(重复'.count($data).'次)';
            }
            //保存用户数据
            /*$client -> client_name = $request->name;
            $client -> client_phone = $request->phone;
            $client -> add_time = time();
            $client -> verification = 1;
            $client -> ip = $_SERVER['REMOTE_ADDR'];
            //$client -> source = $request ->source;
            //$client -> keyword = $request -> keyword;
            $client -> source = $sourceInfo['source'];
            $client -> keyword = $sourceInfo['keyword'];
            $client -> url = $urlId;
            $client -> save();*/
            $client_id =  Client::insertGetId([
                'client_name' => $request->name,
                'client_phone' => $request->phone,
                'add_time' => time(),
                'verification' => 1,
                'ip' => $_SERVER['REMOTE_ADDR'],
                'source' => $sourceInfo['source'],
                'keyword' => $sourceInfo['keyword'],
                'url' => $urlId
            ]);
            //var_dump($client_id);die;
            if(empty($request -> sourceUrl)) {
                $request->sourceUrl = '没有搜索来源,是直接输入地址的';
            }
            //保存搜索来源
            Source::create([
                'client_id' => $client_id,
                'search_url'=> $request->sourceUrl
            ]);
            /*$source -> client_id = $client -> id;
            $source -> search_url = $request->sourceUrl;
            $source -> save();*/
            //删除验证码
            session()->forget('yzm');
            // 提交事务
            DB::commit();
            return 200;
        }catch (\Exception $e)
        {
            //回滚
            DB::rollBack();
            return 104;//网络有延迟,请重试
        }


    }

}
