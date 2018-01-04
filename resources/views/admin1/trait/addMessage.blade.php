@extends('layouts.admin')
@section('title', '后台首页')
@section('my-css')
<style>
    .form-horizontal .control-group{
        border-top:none;
        border-bottom:none;
    }
</style>
@endsection
@section('content')
    <div id="content-header">
        <h1>推广客户</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="返回后台首页" class="tip-bottom"><i class="icon-home"></i> 推广管理</a>
        <a href="#" class="current">网址标志</a>
    </div>
    <div class="container-fluid">
        <div class="content_top clearfix"></div>
        @if (getUserRughts() == 1)
            <p style="margin-top: 15px;">
                <a  id="addForm" class="btn btn-success" role="button" href="javascript:void (0)" >增 加</a>
                <a  id="reduceForm" class="btn btn-success" role="button" href="javascript:void (0)">减 少</a>
            </p>
        @endif
        <div class="row-fluid">
            <div class="addForm">
                <form action="{{url('/admin/message/addParameter')}}" method="post" class="form-horizontal" style="width: 30%;margin-left: 18%;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                    <div id="form_inputs">
                        <div class="one_group">
                            <div class="control-group">
                                <label class="control-label">网址</label>
                                <div class="controls">
                                    <input type="text" name="url" class="form-control" id="inputUrl3" placeholder="网址" value="{{old('url')}}">
                                    @if(count($errors)>0)
                                        <p style="color:#ff0000">{{$errors -> first('url')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">对应网页信息</label>
                                <div class="controls">
                                    <input type="text" name="message" class="form-control" id="inputMessage3" placeholder="对应网页信息" value="{{old('message')}}">
                                    @if(count($errors)>0)
                                        <p style="color:#ff0000">{{$errors -> first('message')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">投放平台</label>
                                <div class="controls">
                                    <select name="SE" id="" class="form-control input-sm" style="">
                                        <option> </option>
                                        <option >360</option>
                                        <option >搜狗</option>
                                        <option >神马</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" style="margin-left: 36%;">添加</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script src="{{url('js/admin/jquery.min.js')}}"></script>
    <script src="{{url('js/admin1/admin.js')}}"></script>
    <script src="{{url('js/admin/bootstrap.min.js')}}"></script>
@endsection
