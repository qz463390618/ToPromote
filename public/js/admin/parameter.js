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
                url:'/admin/message/del',
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
