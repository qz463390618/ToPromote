/**
 * Created by Administrator on 2017/11/10 0010.
 */


$(function()
{
    layui.use(['laydate','dateLay'], function(){
        var  layer = layui.layer,laydate = layui.laydate;
        var obj={
            init:function(){
                this.dp11=$('#dp11');
                this.initEvent();
            },
            initEvent:function(){
                this.dp11.dateLay();

            }
        }
        obj.init();
    });

    $('#sousuo').click(function()
    {

    $('#searchForm').submit();
});

    $('#refresh').click(function()
    {
        window.location.reload();
    });


     $('#addForm').click(function()
     {
         if($(".form-horizontal .one_group")['length'] >= 10)
         {
             return false;
         }
         $("#form_inputs").append($($(".form-horizontal .one_group")[0]).clone());
     });

     $('#reduceForm').click(function()
     {
         var length = $(".form-horizontal .one_group")['length'];
         if(length <=1) {
             return false;
         }

         $($(".form-horizontal .one_group")[length-1]).remove();
     });

});

//删除数据
function del(id)
{
    var con;
    con = confirm('请问是否要删除这条数据');
    if(con == true)
    {
        var data = {
            '_token': $('#token').val(),
            'id' :id
        };
        $.ajax({
            url:'/admin/delClient',
            type:'post',
            async:false,
            data:data,
            success:function(data){
                if(data == 1)
                {
                    location.replace(location.href);
                }else{
                    alert('删除失败');
                }
            }
        });
    }else{
        return false;
    }
}