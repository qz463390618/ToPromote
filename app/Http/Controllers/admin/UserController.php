<?php

namespace App\Http\Controllers\admin;

use App\Admin\Client;
use App\Admin\UrlMessage;
use App\Admin\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function doLogin()
    {
        //var_dump($_POST);
        $user = User::where('user_account',$_POST['user_account'])->first();
        //$user = User::where('user_account','abc')->first();

        //判断账号是否存在
        if(!empty($user))
        {
            $user = $user->toArray();
            //判断账号密码是否正确
            if(md5($_POST['user_pwd']) == $user['user_pwd'])
            {
                session(['user_id' => $user['id']]);

                echo "<script>alert('登入成功');window.location.href='/admin';</script>";
            }else{
                echo "<script>alert('账号或密码错误');window.location.href='/admin/login';</script>";
            }
        }else
            {
                echo "<script>alert('账号或密码错误');window.location.href='/admin/login';</script>";

            }
    }

    //备份 新客户方法
    public function indexRest(Request $request)
    {
        $data_num = $request->data_num ? $request->data_num: 10;
        //echo $data_num;die;
        if ($request->session()->has('user_id')) {
            //获取今天的时间戳
            $now = time();
            $now_date = date('Y-m-d',$now);//获取今天日期
            $nowDateStr = strtotime($now_date); //获取今日0:0:0 的时间戳
            $ywDate = $now_date.' 23:59:59';//拼接今日 23:59:59 凌晨前
            $ywDateStr = strtotime($ywDate);
            $clients = Client::where('add_time','>',$nowDateStr)->where('add_time','<',$ywDateStr+1)->latest('add_time')->paginate($data_num);
            return view('admin.index')->with([
                'data' => $clients,
                'num' => $request -> data_num,
            ]);
        } else {
            echo "<script>alert('您暂未登入,请登入后重试');window.location.href='/admin/login';</script>";
        }
    }

    public function index(Request $request)
    {
        DB::enableQueryLog();
        $data_num = $request->data_num ? $request->data_num: 10;
        //处理登录的域名,分解成3个后台处理数据
        $se_url_id = '';
        //当搜索平台的条件不等于0的时候处理平台选项
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
        if ($request->session()->has('user_id')) {
            //获取今天的时间戳
            $now = time();
            $now_date = date('Y-m-d',$now);//获取今天日期
            $nowDateStr = strtotime($now_date); //获取今日0:0:0 的时间戳
            $ywDate = $now_date.' 23:59:59';//拼接今日 23:59:59 凌晨前
            $ywDateStr = strtotime($ywDate);
            //$clients = Client::where('add_time','>',$nowDateStr)->where('add_time','<',$ywDateStr+1)->latest('add_time')->paginate($data_num);
            $clients = Client::where(function ($query) use ($se_url_id) {
                foreach ($se_url_id as $v)
                {
                    $query -> orWhere('url',$v['id']);
                }
            })
                ->where('add_time','>',$nowDateStr)
                ->where('add_time','<',$ywDateStr+1)
                ->latest('add_time')
                ->paginate($data_num);
            //return response()->json(DB::getQueryLog());
            return view('admin1.index')->with([
                'data' => $clients,
                'num' => $request -> data_num,
            ]);
        } else {
            echo "<script>alert('您暂未登入,请登入后重试');window.location.href='/admin/login';</script>";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        echo "<script>window.location.href='/admin/login';</script>";
    }

    public function test()
    {
        getUserRughts();
    }

    public function all(Request $request)
    {
        //echo $request-

        $data_num = $request->data_num ? $request->data_num: 10;
        $se_url_id = '';
        //当搜索平台的条件不等于0的时候处理平台选项
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
        if ($request->session()->has('user_id')) {
            $clients = Client::where(function ($query) use ($se_url_id){
                foreach ($se_url_id as $v)
                {
                    $query -> orWhere('url',$v['id']);
                }
            })
                ->latest('add_time')
                ->paginate($data_num);
            return view('admin1.all')->with([
                'data' => $clients,
                'num' => $request -> data_num,
            ]);
        } else {
            echo "<script>alert('您暂未登入,请登入后重试');window.location.href='/admin/login';</script>";
        }
    }
}
