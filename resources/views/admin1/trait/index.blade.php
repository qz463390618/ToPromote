@extends('layouts.admin')
@section('title', '后台首页')
@section('my-css')

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
        <p style="margin-top: 15px; float:left;">
            <a href="{{url('admin/message/addshow')}}" class="btn btn-success">增加</a>
        </p>
        @endif
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
                        <h5>网页特征列表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table_data">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>网址</th>
                                <th>对应网页信息</th>
                                @if (getUserRughts() == 1)
                                    <th >操 作</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                            @foreach($data as $v)
                                <tr>
                                    <td style="display:table-cell; vertical-align:middle">{{$v->id}}</td>
                                    <td style="display:table-cell; vertical-align:middle">{{$v->url}}</td>
                                    <td style="display:table-cell; vertical-align:middle">{{$v->message}}</td>
                                    @if(getUserRughts() == 1)
                                        <td style="display:table-cell; vertical-align:middle"><a href="{{url('admin/message/editShow/'.$v->id)}}" style="margin-right: 10px;">修改</a><a href="javascript:void(0)"  onclick="del({{$v->id}})">删除</a></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div style="text-align: center;">
                        {{$data -> links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script src="{{url('js/admin/jquery.min.js')}}"></script>
    <script src="{{url('js/admin1/admin.js')}}"></script>
    <script src="{{url('js/admin/bootstrap.min.js')}}"></script>
    <script src="{{url('js/admin/parameter.js')}}"></script>
@endsection
