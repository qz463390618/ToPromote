<!doctype html>
<html lang="en">
<header></header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('css/admin2/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin2/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin2/unicorn.main.css')}}" />
    <link rel="stylesheet" href="{{url('css/admin2/unicorn.grey.css')}}" class="skin-color" />
    <title>@yield('title', '后台')</title>
    @yield('my-css')
</head>
<body>

<div id="header">
<h1><a href="{{url('/admin')}}">Unicorn Admin</a></h1>
</div>

<div id="search">
    <input type="text" placeholder="搜索内容..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav btn-group">
        <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text">整体</span></a></li>
        <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">信息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#">最新信息</a></li>
                <li><a class="sInbox" title="" href="#">收件箱</a></li>
                <li><a class="sOutbox" title="" href="#">发件箱</a></li>
                <li><a class="sTrash" title="" href="#">垃圾箱</a></li>
            </ul>
        </li>
        <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
        <li class="btn btn-inverse"><a title="" href="{{url('/admin/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
    </ul>
</div>

<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制台</a>
    <ul>
        <li class=""><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>新用户</span></a></li>
        <li><a href="{{url('/admin/all')}}"><i class="icon icon-th"></i> <span>所有用户</span></a></li>
        <!-- <li><a href="{{getUserRughts() == 1 ?url('admin/message'):url('#')}}"><i class="icon icon-th"></i> <span>网页标志</span></a></li> -->

        <li><a href="{{url('admin/message')}}"><i class="icon icon-th"></i> <span>网页标志</span></a></li>
    </ul>

</div>


<div id="content">
    @section('content')

    @show
</div>

<script src="{{url('js/admin1/jquery.min.js')}}"></script>
<script src="{{url('js/admin1/unicorn.js')}}"></script>

@yield('my-js')
</body>
</html>