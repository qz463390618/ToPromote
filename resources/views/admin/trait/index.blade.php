<!DOCTYPE html>
<html lang="en">
<head>
    <title>推广管理</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('css/admin/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin/matrix-media.css')}}" />
    {{--<link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />--}}
    <link rel="stylesheet" href="{{url('css/admin/jquery.gritter.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin/style.css')}}" />
    <link rel="stylesheet" href="{{url('plugIn/date/plugin/layui-v1.0.7/css/layui.css')}}">
    <link rel="stylesheet" href="{{url('plugIn/date/css/date.css')}}">
    {{--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>--}}
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="/admin">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                {{--<li><a href="{{url('admin/logout')}}"><i class="icon-key"></i>退出登入</a></li>--}}
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="{{url('admin/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class=""><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>新用户</span></a> </li>
        <li class=""><a href="{{url('/admin/all')}}"><i class="icon icon-home"></i> <span>所有用户</span></a> </li>
        <li class=""><a href="{{url('/admin/message')}}"><i class="icon icon-home"></i> <span>网页标志</span></a> </li>
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <div class="content_head">
        <h2>推广客户</h2>
        <ul class="breadcrumb">
            <li>推广管理</li>
            <li class="active"><a href="">网址特征</a></li>
        </ul>
    </div>

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header>
                    <div class="row">
                        <div class="col-sm-2">
                            @if (getUserRughts() == 1)
                            <a  id="outExcel" class="btn btn-success iptRest sub" role="button" href="{{url('/admin/message/addshow')}}">增 加</a>
                            @endif
                        </div>
                    </div>
                </header>
            </section>
        </div>
    </div>
</div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <table cellpadding="0" cellspacing="0" border="1" class="table_data" style="margin:0 auto">
        <thead>
        <tr height="50">
            <th width="300">id</th>
            <th width="300">网址</th>
            <th width="300">对应网页信息</th>
            @if (getUserRughts() == 1)
            <th width="300">操作</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr height="40">
                <td>{{$v->id}}</td>
                <td>{{$v->url}}</td>
                <td>{{$v->message}}</td>
                @if (getUserRughts() == 1)
                <td><a href="{{url('admin/message/editShow/'.$v->id)}}" style="margin-right: 10px;">修改</a><a href="javascript:void(0)"  onclick="del({{$v->id}})">删除</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data -> links()}}
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="{{url('js/admin/jquery.min.js')}}"></script>
<script src="{{url('js/admin/bootstrap.min.js')}}"></script>

<script src="{{url('plugIn/date/plugin/layui-v1.0.7/layui.js')}}" type="text/javascript"></script>
<script src="{{url('plugIn/date/main.js?1')}}" type="text/javascript"></script>
<script src="{{url('js/admin/admin.js')}}"></script>
<script src="{{url('js/admin/parameter.js')}}"></script>
</body>

</html>


