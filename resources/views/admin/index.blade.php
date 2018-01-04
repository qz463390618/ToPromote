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
            <li class="active"><a href="">新客户</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header>
                        <form method="get" action="{{url('/admin/search')}}" id="searchForm">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a  id="outExcel" class="btn btn-success iptRest sub" role="button">导 出</a>
                                    <a  id="refresh" class="btn btn-success iptRest sub" role="button">刷 新</a>
                                </div>
                                <div class="col-sm-10">
                                    <div class="col-sm-2">
                                        <!--<select name="pId" id="select_form" class="form-control">
                                            <option value="0" <?= isset($_GET['pId']) ? ($_GET['pId'] == 0 ? 'selected':'' ) : 'selected'?>>平台</option>
                                            <option value="1" <?= isset($_GET['pId']) ? ($_GET['pId'] == 1 ? 'selected': '') : ''?> >360</option>
                                            <option value="2" <?= isset($_GET['pId']) ? ($_GET['pId'] == 2 ? 'selected': '') : ''?>>搜狗</option>
                                            <option value="3" <?= isset($_GET['pId']) ? ($_GET['pId'] == 3 ? 'selected': '') : ''?>>神马</option>
                                        </select>-->

                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label class="layui-form-label">搜索日期</label>
                                        <div class="layui-input-inline ui-time">
                                            <input type="text" id="dp11" class="layui-input ui-time-text" name="search_time" value="<?= !empty($_GET['search_time']) ? $_GET['search_time']:'' ?>" kssj="" jssj="" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <button id="sousuo" class="btn btn-success">搜 索</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="zlq6">
                                    <div id="dynamic-table_length" class="dataTables_number">
                                        <label for="">
                                            <select name="data_num" id="" class="form-control">
                                                <option value="10" <?= isset($_GET['data_num']) ? ($_GET['data_num'] == 10 ? 'selected': '') : 'selected'?>>10</option>
                                                <option value="50" <?= isset($_GET['data_num']) ? ($_GET['data_num'] == 50 ? 'selected': '') : ''?> >50</option>
                                                <option value="100" <?= isset($_GET['data_num']) ? ($_GET['data_num'] == 100 ? 'selected': '') : ''?> >100</option>
                                                <option value="1000" <?= isset($_GET['data_num']) ? ($_GET['data_num'] == 1000 ? 'selected': '') : ''?> >1000</option>
                                                <option value="all" <?= isset($_GET['data_num']) ? ($_GET['data_num'] == 'all' ? 'selected': '') : ''?>>所有</option>
                                                <!--<option value="all"  >all</option>-->
                                            </select>
                                            显示多少条数据
                                        </label>
                                    </div>
                                </div>
                                <div class="zlq6">
                                    <div id="dynamic-table_filter" class="dataTables_words">
                                        <label >
                                            搜索:<input type="text" name="search_word" class="form-control" style="display: inline-block" value="<?= !empty($_GET['search_word'])? $_GET['search_word']:'' ?>">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </header>
                </section>
            </div>
        </div>
    </div>

    <table cellpadding="0" cellspacing="0" border="1" class="table_data" id="table_data">
        <thead>
            <tr height="50" class="">
                <th width="180">姓名</th>
                <th width="200">电话</th>
                <th width="180">ip</th>
                <th width="260">添加来源</th>
                <th width="150">搜索引擎</th>
                <th width="200">关键词</th>
                <th width="200">添加时间</th>
                @if (getUserRughts() == 1)
                <th width="100" class="noExl">操 作</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr height="40">
                <td>{{$v['client_name']}}</td>
                <td>{{ getUserRughts()== 1 ? $v['client_phone']: substr_replace($v['client_phone'],'****',3,4)}}</td>
                <td>{{$v['ip']}}
                    <br>


                </td>
                <td>
                    @if(!empty($v['url']))
                    <?php
                        $urlInfo = getUrlInfo($v['url'])
                        ?>
                    {{$urlInfo['message']}}
                        <br>
                        <a href="http://{{$urlInfo['url']}}">{{$urlInfo['url']}}</a>
                    @endif
                </td>
                <td>
                    @if(!empty($v['source']))
                        {{$v['source']}}
                    @endif
                </td>
                <td>
                    @if(!empty($v['keyword']))
                        {{$v['keyword']}}
                    @endif
                </td>
                <td>{{ date('Y-m-d H:i:s',$v['add_time'])}}</td>
                {{--<td>{{$v -> client_name}}</td>--}}
                @if(getUserRughts() == 1)
                <td><a href="javascript:void(0)" onclick="del({{$v['id']}})">删除</a></td>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data ->appends(
        [
            'data_num'=> $num,
        ]
    )-> links()}}
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
<script src="{{url('js/admin/jquery.table2excel.min.js')}}"></script>
</body>
<script>
    $('#outExcel').click(function()
    {
        $('.table_data').table2excel({
            exclude: ".noExl",
            name: "Excel Document Name",
            filename: "myFileName",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true
        });
    });
</script>
</html>

<?php

function analyze($ip)
{
    $ipInfo = file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ip);
    $ipInfo = json_decode($ipInfo,true);
    $data['region'] = $ipInfo['data']['region'];
    $data['city'] = $ipInfo['data']['city'];
    return $data;
}

?>
