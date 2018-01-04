<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{url('plugIn/admin/css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('plugIn/admin/css/demo.css')}}" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="{{url('plugIn/admin/css/component.css')}}" />
    <!--[if IE]>
    <script src="{{url('plugIn/admin/js/html5.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>欢迎你</h3>
                <form action="{{url('admin/doLogin')}}" method="post" name="f" id="user_form">
                    {{csrf_field()}}
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input placeholder="用户名" name="user_account" class="text" style="color: #FFFFFF !important" type="text" >
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input placeholder="密码" name="user_pwd" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" >
                    </div>
                    <div class="mb2"><a class="act-but submit" href="javascript:document.getElementById('user_form').submit();;" style="color: #FFFFFF">登录</a></div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="{{url('plugIn/admin/js/TweenLite.min.js')}}"></script>
<script src="{{url('plugIn/admin/js/EasePack.min.js')}}"></script>
<script src="{{url('plugIn/admin/js/rAF.js')}}"></script>
<script src="{{url('plugIn/admin/js/demo-1.js')}}"></script>
</body>
</html>