@extends('layouts.admin')
@section('title', '后台首页')
@section('my-css')
    <link rel="stylesheet" href="{{url('plugIn/date1/plugin/layui-v1.0.7/css/layui.css')}}">
    <link rel="stylesheet" href="{{url('plugIn/date1/css/date.css')}}">
@endsection
@section('content')
    <div id="content-header">
        <h1>推广客户</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="返回后台首页" class="tip-bottom"><i class="icon-home"></i> 推广管理</a>
        <a href="#" class="current">新客户</a>
    </div>
    <div class="container-fluid">
        <div class="content_top clearfix"></div>
        <p style="margin-top: 15px; float:left;">
            <button class="btn btn-success" id="outExcel">导出</button>
            <button class="btn btn-danger"  onclick="window.location.reload();">刷新</button>
        </p>
        <div class="" style="float: left;">
            <form method="get" action="{{url('/admin/search')}}" id="searchForm" class="form-horizontal" style="margin-top: 5px;">
                <div id="dynamic-table_length" class="dataTables_number" style="display: inline-block;margin-left: 20px;">
                    <label for="">
                        <select name="data_num" id="" class="form-control" style="width: 66px;">
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
                <div class="control-group" style="display: inline-block">
                    <label class="control-label" style="width: 120px;">搜索日期</label>
                    <div class="controls ui-time" style="margin-left: 135px;">
                        <input type="text" id="dp11" class="layui-input ui-time-text" name="search_time" value="<?= !empty($_GET['search_time']) ? $_GET['search_time']:'' ?>" kssj="" jssj=""  style="height: 30px;width: 215px;" readonly/>
                    </div>
                </div>
                <div class="control-group" style="display: inline-block">
                    <label class="control-label" style="width: 75px;">搜索</label>
                    <div class="controls" style="margin-left: 90px;">
                        <input type="text" name="search_word" class="form-control" style="display: inline-block" value="<?= !empty($_GET['search_word'])? $_GET['search_word']:'' ?>">
                    </div>
                </div>
                <button class="btn btn-success" id="sousuo">搜索</button>
            </form>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
                        <h5>新客户列表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table_data">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>姓名</th>
                                <th>电话</th>
                                <th>ip</th>
                                <th>添加来源</th>
                                <th>搜索引擎</th>
                                <th>关键词</th>
                                <th>添加时间</th>
                                @if (getUserRughts() == 1)
                                    <th >操 作</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                            @foreach($data as $v)
                                <tr>
                                    <td style="display:table-cell; vertical-align:middle">{{$v['id']}}</td>
                                    <td style="display:table-cell; vertical-align:middle">{{$v['client_name']}}</td>
                                    <td style="display:table-cell; vertical-align:middle">{{ getUserRughts()== 1 ? $v['client_phone']: substr_replace($v['client_phone'],'****',3,4)}}</td>
                                    <td style="display:table-cell; vertical-align:middle">{{$v['ip']}}</td>
                                    <td style="display:table-cell; vertical-align:middle">
                                        @if(!empty($v['url']))
                                            <?php
                                            $urlInfo = getUrlInfo($v['url'])
                                            ?>
                                            {{$urlInfo['message']}}
                                            <br>
                                            <a href="http://{{$urlInfo['url']}}">{{$urlInfo['url']}}</a>
                                        @endif
                                    </td>
                                    <td style="display:table-cell; vertical-align:middle" >
                                        @if(!empty($v['source']))
                                            {{$v['source']}}
                                        @endif
                                    </td>
                                    <td style="display:table-cell; vertical-align:middle" >
                                        @if(!empty($v['keyword']))
                                            {{$v['keyword']}}
                                        @endif
                                    </td>
                                    <td style="display:table-cell; vertical-align:middle" >{{ date('Y-m-d H:i:s',$v['add_time'])}}</td>
                                    @if(getUserRughts() == 1)
                                        <td style="display:table-cell; vertical-align:middle"><a href="javascript:void(0)" onclick="del({{$v['id']}})">删除</a></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div style="text-align: center;">
                        {{$data ->appends(
                            [
                                'data_num'=> $num,
                            ]
                        )-> links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script src="{{url('plugIn/date/plugin/layui-v1.0.7/layui.js')}}" type="text/javascript"></script>
    <script src="{{url('plugIn/date/main.js?1')}}" type="text/javascript"></script>
    <script src="{{url('js/admin1/admin.js')}}"></script>
    <script src="{{url('plugIn/date1/plugin/layui-v1.0.7/layui.js')}}" type="text/javascript"></script>
    <script src="{{url('plugIn/date1/main.js?1')}}" type="text/javascript"></script>
    <script src="{{url('js/admin/jquery.min.js')}}"></script>
    <script src="{{url('js/admin/bootstrap.min.js')}}"></script>
    <script src="{{url('js/admin1/jquery.table2excel.min.js')}}"></script>
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
@endsection
