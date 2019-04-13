<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/2 0002
 * Time: 下午 3:40
 */


//ip接口调用,解析ip地址获取ip的省和市
function analysisIp($ip)
{
    $ipInfo = file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ip);
    $ipInfo = json_decode($ipInfo,true);
    $data['region'] = $ipInfo['data']['region'];
    $data['city'] = $ipInfo['data']['city'];
    return $data;
}
//根据网址获取这个网址的标题   已废弃
function analyzeUrl($url)
{
    //echo strripos($url,'/');
    $make =  strrchr($url,'/');
    //echo $make;
    //echo $make.'<br>';
    //如果存在? 和其后面的参数,取问号前面的字符
    if(strpos($make,'?'))
    {
        $make = strstr($make,'?',true);
    }

    //echo strlen($make);

    //echo $make;
    //die;
    if(strlen($make) <= 1)
    {
        //把$Url 左边的协议清除掉
        $url = str_replace('http://','',$url);
        //把右边的/去掉
        //echo $url;die;
        if(strpos($url,'?'))
        {
            $url = strstr($url,'?',true);
        }
        $url = rtrim($url,'/');

        //$url = strstr($url,'?',true);
        //echo $url;die;
        //$url = rtrim($url,'/');

        //echo $url;
        switch($url)
        {
            case 'ww.hxtz126.cn':
                return '博易大师';
                break;
            case 'ww.qltzz.cn':
                return '投资神器';
                break;
            case 'ww.haodai01.com':
                return '手机-投资神器';
                break;
        }
    }else
    {
        //把参数左边的/去掉
        $make = ltrim($make,'/');
        //查询路由数据库,根据参数值获取网页名
        $abc = \Illuminate\Support\Facades\DB::table('url_parameter')->select(['parameter_name'])->where('parameter_val',$make)->first();
       // var_dump($abc);
        return $abc->parameter_name;

    }



}
//获取网址和网址信息:根据用户进来网址的id
function getUrlInfo($url_id)
{
  $urlInfo = \App\Admin\UrlMessage::where('id',$url_id)->first()->toArray();
  return $urlInfo;
}
//获取网址id  根据关键词 查询 相应网址id
function getUrlId($url_message)
{
    $urlId = \App\Admin\UrlMessage::where(function($query) use ($url_message){
        $query -> orWhere('message','like','%'.$url_message.'%');
    })->get()->toArray();
    return $urlId;
}
//获取关键词
function getKeyWord($url)

{
    if(!empty($url))
    {
        $sosuo = explode('.',$url)[1];
        $UrlArr = parse_url($url);
        if(empty($UrlArr['query']))
        {
            $source = '&无来源';
            $keyword = '&无来源';
            return ['source' =>$source,'keyword' => $keyword];
        }
        $UrlQuery = convertUrlQuery($UrlArr['query']);

        switch($sosuo)
        {
            case 'baidu':
                $source = '百度';
                if(!isset($UrlQuery['wd']))
                {
                    $keyword = urldecode($UrlQuery['word']);
                }else{
                    $keyword = urldecode($UrlQuery['wd']);
                }
                break;
            case 'sogou':
                $source = '搜狗';
                if(!isset($UrlQuery['query']))
                {
                    $keyword = urldecode($UrlQuery['keyword']);
                }else{
                    $keyword = urldecode($UrlQuery['query']);
                }
                break;
            case 'so':
                $source = '360';
                $keyword = urldecode($UrlQuery['q']);
                break;
            case 'm':
                $source = '神马';
                $keyword = urldecode($UrlQuery['q']);
                break;
            case 'sm':
                $source = '神马';
                $keyword = urldecode($UrlQuery['q']);
                break;
            default:
                $source = '&该搜索引擎未收入';
                $keyword = urldecode($UrlQuery['query']) ;
                break;
        }

        if($keyword != '&未知')
        {
            return ['source' =>$source,'keyword' => $keyword];
        }
        if($keyword == '&未知')
        {
            switch($sosuo)
            {
                case 'sogou':
                    $source = '搜狗';
                    $keyword = urldecode($UrlQuery['keyword']);
                    break;
                default:
                    $source = '&该搜索引擎未收入';
                    $keyword = urldecode($UrlQuery['query']);
                    break;
            }
        }else{
            $source = '&不能识别此浏览器';
            $keyword = '&解析不了关键词';
        }
        return ['source' =>$source,'keyword' => $keyword];
    }else{
        $source = '&无来源';
        $keyword = '&无来源';
        return ['source' =>$source,'keyword' => $keyword];
    }

}
//将路由参数解析成数组
function convertUrlQuery($query)
{
    $queryParts = explode('&',$query);
    $params = array();
    foreach($queryParts as $k => $v)
    {
        if(!strpos($v,'='))
        {
            unset($queryParts[$k]);
        }
    }
    foreach($queryParts as $param)
    {
        $item = explode('=',$param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}
//判断ip出现次数
function handingIp($ip)
{
    //不封闭的ip
    $notClosedIp = [
        '',
        '127.0.0.1',
        '116.226.241.125',
        '101.88.230.137',
        '119.39.248.8'
    ];
    //判断这个ip是否包含在管理ip里
    if(array_search($ip,$notClosedIp))
    {
        return false;
    }
    $client = \App\Admin\Client::select(['id'])->where('ip',$ip)->get()->toArray();
    if(count($client) >= 2)
    {
        return true;
    }else{
        return false;
    }
}
//获取登录用户的权限等级
//1 超级管理员 2业务员/操作员
//出现登录bug时的解决(服务器上未传)
function getUserRughts()
{
    //var_dump(session('user_id'));
    if(!empty(session('user_id'))){
        $user_id = session('user_id');
        $userInfo = \App\Admin\User::where('id',$user_id)->first()->toArray();
        return $userInfo['user_role'];
    }else{
        echo "<script>alert('您暂未登入,请登入后重试');window.location.href='/admin/login';</script>";
    }
}

//返回路由标志
function getMark($host)
{
    switch($host){
        case 'ww.qltzz.cn':
            $mark = '360';
            break;
        case 'ww.hxtz126.cn':
            $mark = '搜狗';
            break;
        case 'ww.haodai01.com':
            $mark = '神马';
            break;
        case 'ww.cmsyuns.cn':
            $mark = '360';
            break;
        default:
            $mark = '';
            break;
    }
    return $mark;
}