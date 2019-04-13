var csrf_token = 'eyJhbGciOiJIUzI1NiIsImlhdCI6MTUyMTQ0NjgwOSwiZXhwIjoxNTIxNDUwNDA5fQ.eyJpZCI6ImE2YzE0YjY0YTNkNTRhOTY5MzZiZmZkNjVkMjk1NWM1In0.C2h1HPfXKO0pgVZcm7WoIrAPiRVMnM-Ywu3hYKA-bLs';
/*
 *后台注册页面脚本
 *用法: 引入  http://
 */

/*
场景: 输入姓名的input,输入短信验证码的input和提交的按钮是同一个div/form元素的子元素的情况.
在此场景下,需要做如下约定:
1. 注册框 div/form 的类属性中包含 reg_div 类.比如:

    <div class='reg_div'>
        <input type='text'......
        ..........
    </div>

2. 用户名/姓名, 用户手机号码, 短信验证码输入框必须按照约定添加类名.
   用户名/姓名  的input元素添加 user_name 类
   用户手机号码 的input元素添加 user_phone类
   备注信息    的input元素添加 customer_description类 类型为hidden
   提交按钮    的按钮元素添加   submit_btn类  有一个可选的属性:data-callback用于指明注册完成时执行的回调函数.这个属性可以灵活的自定义注册完成时的动作.
   举例如下:

   <div class='reg_div'>
        <input type='text' class='user_name' placeholder='请输入姓名'>
        <input type='text' class='user_phone' placeholder='请输入手机号码'>
        <input type='text' class='sms_code' placeholder='请输入验证码'>
        <input type='hidden' class='customer_description' value='白银推广页面,第一个弹出注册框'>
        <input type='button' data-callback='my_callback_func_name' class='submit_btn' value='马上注册'>
   </div>

    注意,以上元素都不可使用脚本动态生成,必须是html文件里原生的.
    一般来说,按照以上约定,页面的注册框就可以绑定注册功能了.

附录. 
    1.提交注册时用到的需要约定的字段共3个,各字段的约定名称如下: 
        user_name:             用户名/用户姓名/称呼等  非必须字段.
        user_phone:            用户注册时的手机号码.     必须字段.
        sms_code:              短信验证码.             必须字段.
        customer_description:  备注信息              非必须字段.
        了解这些字段会有助于你在遇到问题时的诊断.
    

*/
func_dict = {}; //  全局函数字典
var reg_url = "http://39.108.67.178:9000/register";  // 注册链接
// var reg_url = "http://127.0.0.1:9000/register";  // 注册链接
var sms_url = "http://39.108.67.178:9000/send_sms";   // 短信链接
// var sms_url = "http://127.0.0.1:9000/send_sms";   // 短信链接
// console.log(csrf_token);                         // csrf_token有flask-wtf生成
var page_url = location.href;
var referrer = document.referrer;


$.ajaxSetup({
    beforeSend: function(xhr, settings) {
        console.log(settings);
        console.log(this);
        if (!/^(GET|HEAD|OPTIONS|TRACE)$/i.test(settings.type)) {
        // if (!/^(GET|HEAD|OPTIONS|TRACE)$/i.test(settings.type) && !this.crossDomain) {
            xhr.setRequestHeader("X-Auth-Token", csrf_token);  // 设置标准请求头
            console.log("请求头设置完毕")
        }
        else{
             console.log("无法设置请求头")
        }
    }
});

// 注册一个函数
add_func = function (func_name, func) {
    func_dict[func_name] = func;
};

// 获取一个已注册的函数
get_func = function (func_name) {
    var func = func_dict[func_name];
    return func;
};

// 移除一个已注册函数
remove_func = function (func_name) {
    var temp = {};
    var keys = Object.keys(func_dict);
    for (var i = 0; i < keys.length; i++) {
        var key = keys[i];
        var val = func_dict[key];
        if (key !== func_name) {
            temp[key] = val;
        } else {
            // nothing....
        }
    }
    func_dict = temp;
};

// 获取一个注册回调函数,这个是get_func的增强版,提供了默认函数.一般情况下,应该调用此函数而不是get_func,
get_callback_func = function(btn_item, default_func_name){
    /*第一个函数是带有data-callback属性的jQuery对象,第二个函数是此回调事件的默认的函数名 */
    var callback_func = null;
    callback_name = btn_item.attr("data-callback");
    if (callback_name === undefined) {
        callback_name = "default_reg_callback";
    } else {
        // nothing...
    }
    callback_func = func_dict[callback_name] === undefined ? func_dict['default_reg_callback'] : func_dict[callback_name];
    return callback_func;
};

// 默认的回调事件
var default_callback = function (mes) {
    alert(mes);
};

func_dict['default_reg_callback'] = default_callback; // 注册默认的全局注册回调函数
func_dict['default_sms_callback'] = default_callback; // 注册默认的全局短信发送回调函数

// 验证手机号码的函数,不合法的手机号码会返回false
validate_phone = function (phone) {
    var myreg = /^(((1[3-9][0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (myreg.test(phone)) {
        return true;
    } else {
        return false;
    }
};

// 验证短信验证码
validate_sms = function (sms_code) {
    var flag = false;
    if (sms_code === '') {
        flag = false;
    } else if (sms_code.indexOf(" ") !== -1) {
        flag = false;
    } else {
        flag = isNaN(sms_code) ? false : true;
    }

    if (flag) {
        flag = sms_code.length === 4 ? true : false;
    } else {
        // nothing...
    }
    return flag;
};



// 显示倒计时的秒的函数
show_count_down = function(second_num){
    var show_counts = $(".show_count");
    show_counts.each(function(){
        var $this = $(this);
        if($this[0].tagName.toUpperCase() === "INPUT"){
            var content = $this.val();
            $this.val(second_num);
            return content;
        }
        else{
            var content = $this.text();
            $this.text(second_num);
            return content;
        }   
    });
};

var raw_dict = {};  // 全局变量,存储倒计时元素以前的内容

// 倒计时函数
count_down_func = function(seconds, style_class){
    var total_seconds = seconds;
    var first = true;
    var my_interval = setInterval(function(){
        if(total_seconds > 0){
            if(first){
                $(".show_count").addClass(style_class).each(function(){
                    var $this = $(this);
                    var key = String(Math.random());
                    var val = $this[0].tagName.toUpperCase() === "INPUT"? $this.val(): $this.text();
                    $this.attr("data-id", key);
                    raw_dict[key] = val;
                });
                $(".sms_btn").attr("disabled", true);
                first = false;
                console.log(raw_dict);
            }
            else{
                // nothing....
            }
            show_count_down(total_seconds);
            total_seconds -= 1;
        }
        else{
            first = true;
            console.log(raw_dict);
            $(".sms_btn").removeAttr("disabled");
            $(".show_count").removeClass(style_class).each(function(){
                var $this = $(this);
                var key = $this.attr("data-id");
                var val = raw_dict[key];
                if($this[0].tagName.toUpperCase() === "INPUT"){
                    $this.val(val);
                }
                else{
                    $this.text(val);
                }
                $this.removeAttr("data-id");
            });
            clearInterval(my_interval);
        }
    }, 1000);
};

// 初始化注册框
init_reg = function(seconds, style_class){
    var seconds = seconds === undefined? 60: seconds;  // 倒计时秒数
    var style_class = style_class === undefined? 'show_count': style_class;  // 倒计时时候的样式类
    // 绑定短信发送事件
    var sms_btns = $(".sms_btn");  // 发送短信的按钮.
    sms_btns.each(function(){
        var sms_btn = $(this);
        // 绑定短信发送按钮事件
        sms_btn.click(function(){
            var $this = $(this);  // 短信发送按钮
            var user_phone = $.trim($this.parents(".reg_div:first").find(".user_phone:first").val());
            var func = get_callback_func($this, "default_sms_callback");
            // if(validate_phone(user_phone)){
            if(1){
                var args = {
                    "user_phone": user_phone,

                };
                $.post(sms_url, args, function(json){
                    var resp = JSON.parse(json);
                    var status = resp['message'];
                    if(status === "success"){
                        status = "发送成功";
                        // 开始倒计时
                        count_down_func(seconds, style_class);
                    }
                    else{
                        // nothing...
                    }
                    func(status);
                });
            }
            else{
                func("手机号码不正确");
            }
        });
    });

    // 注册函数
    $(".reg_div").each(function () {
        var div = $(this);
        var user_name_item = div.find(".user_name").first();
        var user_phone_item = div.find(".user_phone").first();
        var sms_code_item = div.find(".sms_code").first();
        var customer_description_item = div.find(".customer_description").first().length === 0?
            $(".customer_description:first"): div.find(".customer_description:first");
        var submit_btn = div.find(".submit_btn");
        
        /*检查元素是否存在?不存在的元素就放弃*/
        if (user_phone_item.length === 0 || submit_btn.length === 0) {
            // 不满足最小元素数量,放弃绑定.
        } else {
            // 绑定提交事件
            submit_btn.click(function () {
                console.log("register...");
                // 尝试提取查询的关键词比如交易所名称,关键词的类都是 search_keyword
                var search_keyword = '';
                $(".search_keyword").each(function(){
                    var $this = $(this);
                    search_keyword += $.trim($this[0].tagName.toUpperCase() === "INPUT"?$this.val(): $this.text());
                });
                // 提取各种注册参数
                var user_name = $.trim(user_name_item.val());
                var user_phone = $.trim(user_phone_item.val());
                var sms_code = $.trim(sms_code_item.val());
                var customer_description = $.trim(customer_description_item.text()) === '' ? "页面标题:" +
                    $("title").text() : $.trim(customer_description_item.text());
                var mes = '';

                // 检查并提取回调函数.
                var callback_func = get_callback_func(submit_btn, "default_reg_callback");  // 提取函数,注意第二个参数是默认的函数名

                // 提交之前检查参数
                if (!validate_phone(user_phone)) {
                    mes = '手机号码错误';
                } else if (!validate_sms(sms_code)) {
                    mes = '验证码错误';
                } else {
                    // nothing...
                }
                if (mes === '') {
                    var args = {
                        "page_url": page_url,
                        "referrer": referrer,
                        "user_name": user_name,
                        "user_phone": user_phone,
                        "sms_code": sms_code,
                        "customer_description": customer_description,
                        "search_keyword": search_keyword
                    };
                    console.log(args);
                    $.post(reg_url, args, function (json) {
                        var resp = JSON.parse(json);
                        var mes = resp['message'];
                        mes = mes === "success" ? "注册成功" : mes;
                        callback_func(mes);
                    });
                } else {
                    callback_func(mes);
                }
            });
        }
    });
};
init_reg();  // 初始化