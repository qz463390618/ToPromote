<?php

namespace App\Http\Controllers\admin;

use App\Admin\UrlMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class UrlMessageController extends Controller
{
    //显示页面
    public function index()
    {
        $parameters = UrlMessage::latest('id')->paginate(10);
        return view('admin1.trait.index')->with('data',$parameters);
    }

    //执行添加
    public function addParameter(Request $request)
    {
        //var_dump($request -> toArray());die;
        //设置验证消息
        $messages = [
            'url.reqyured' => '网址不能为空',
            'url.unique'=>'网址已存在',
            'url.max' => '网址超过:max位',
            'message.reqyured' => '对应网页信息不能为空',
            'message.max' => '对应网页信息超过:max位',
            'SE.required'=>'投放平台不能为空',
            'SE.max'=>'投放平台最大值为max',

        ];
        //设置验证规则
        $validator = Validator::make($request->all(),[
            'url'=>'bail|required|unique:url_message,url|max:50',
            'message'=>'required|max:50',
            'SE' => 'required|max:20'
        ],$messages);
        //错误返回
        if($validator->fails())
        {
             return back()->withErrors($validator)->withInput();
        }
        $urlMessage = new UrlMessage();
        $urlMessage->url = $request->url;
        $urlMessage->message = $request -> message;
        $urlMessage->url_se = $request -> SE;
        $urlMessage->save();
        if($urlMessage->id)
        {
            return '<script>alert("添加成功");window.location.href="/admin/message/addshow";</script>';
        }else{
            return '<script>alert("添加失败");window.location.href="/admin/message/addshow";</script>';
        }
    }

    //删除数据
    public function delParameter(Request $request)
    {
        $mark = UrlMessage::where('id',$request->id)->delete();
        return $mark;
    }

    //显示编辑页面
    public function editShow(Request $request)
    {

        $urlInfo = UrlMessage::where('id',$request->id)->first()->toArray();
        return view('admin1.trait.editMessage',['urlInfo'=>$urlInfo]);
    }

    //执行编辑
    public function editMessage(Request $request)
    {
        //var_dump($request->toArray());
        $messages = [
            'url.reqyured' => '网址不能为空',
            'url.unique'=>'网址已存在',
            'url.max' => '网址超过:max位',
            'message.reqyured' => '对应网页信息不能为空',
            'message.max' => '对应网页信息超过:max位',
            'SE.required'=>'投放平台不能为空',
            'SE.max'=>'投放平台最大值为max',

        ];
        //设置验证规则
        $validator = Validator::make($request->all(),[
            'url'=>'bail|required|unique:url_message,url|max:50',
            'message'=>'required|max:50',
            'SE' => 'required|max:20'
        ],$messages);
        //错误返回
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $url = UrlMessage::find($request->id);
        $url -> url = $request->url;
        $url ->message = $request -> message;
        $url -> url_se = $request ->SE;
        $url -> save();

        if($url -> id)
        {
            return '<script>alert("修改成功");window.location.href="/admin/message/";</script>';
        }else{
            return '<script>alert("修改失败");window.location.href="/admin/message/";</script>';
        }
    }
}
