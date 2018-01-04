<?php

namespace App\Http\Controllers\admin;

use App\Admin\Parameter;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Parameter::latest('id')->paginate(10);
        return view('admin.trait.index')->with('data',$parameters);
    }

    public function addParameter(Request $request)
    {
        //设置验证消息
        $messages = [
            'parameter_val.reqyured' => '标志不能为空',
            'parameter_val.unique'=>'标志已存在',
            'parameter_val.max' => '标志超过:max位',
            'parameter_name.reqyured' => '对应网页不能为空',
            'parameter_name.max' => '对应网页超过:max位',

        ];
        //设置验证规则
        $validator = Validator::make($request->all(),[
            'parameter_val'=>'bail|required|unique:url_parameter,parameter_val|max:30',
            'parameter_name'=>'required|max:50'
        ],$messages);
        //错误返回
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $parameter = new Parameter();
        $parameter->parameter_val = $request->parameter_val;
        $parameter->parameter_name = $request -> parameter_name;
        $parameter->save();
        if($parameter->id)
        {
            return '<script>alert("添加成功");window.location.href="/admin/parameter";</script>';
        }else{
            return '<script>alert("修改成功");window.location.href="/admin/parameter";</script>';
        }
    }

    //删除数据
    public function delParameter(Request $request)
    {
       $mark = Parameter::where('id',$request->id)->delete();
        return $mark;
    }
}
