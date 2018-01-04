/**
 * Created by Administrator on 2017/11/3 0003.
 */
//获取关键词

    function checkStr(str,str1){
        if(str != null || str1 != null){
            if(str != null){
                keyword=str.toString().split("=")[1].split("&")[0];
                return decodeURIComponent(keyword);
            }
            if(str1 != null){
                keyword=str1.toString().split("=")[1];
                return decodeURIComponent(keyword);
            }
        }else{
            return '&未知';
        }
    }

    var grep=null;
    var str=null;
    var str1=null;
    //搜索引擎
    var source = "";
    var keyword=null;
    var refer = document.referrer;//搜索来源页
    function getForm()
    {
        //如果来源页不是空执行,是从搜索页面进来的
        if(refer != "")
        {
            var sosuo=refer.split(".")[1];//获取到搜索引擎
            switch (sosuo)
            {
                case 'baidu':
                    source = "百度";
                    grep=/wd\=.*\&/i;
                    grep1=/wd\=.*/i;
                    str=refer.match(grep);
                    str1=refer.match(grep1);
                    break;
                case 'sogou':
                    source = "搜狗";
                    grep=/query\=.*\&/i;
                    grep1=/query\=.*/i;
                    str=refer.match(grep);
                    str1=refer.match(grep1);
                    break;

                case 'so':
                    source = "360";
                    grep=/q\=.*\&/i;
                    grep1=/q\=.*/i;
                    str=refer.match(grep);
                    str1=refer.match(grep1);
                    break;
                case "m":
                    source = "神马";
                    grep=/q\=.*\&/i;
                    grep1=/q\=.*/i;
                    str=refer.match(grep);
                    str1=refer.match(grep1);
                    break;
                default:
                    source = "&未知";
                    grep=/query\=.*\&/i;
                    grep1=/query\=.*/i;
                    str=refer.match(grep);
                    str1=refer.match(grep1);
            }
            keyword = checkStr(str,str1);
            if(keyword == '&未知')
            {
                switch (sosuo)
                {
                    case "sogou":
                        source = "搜狗";
                        grep=/keyword\=.*\&/i;
                        grep1=/keyword\=.*/i;
                        str=refer.match(grep);
                        str1=refer.match(grep1);
                        break;
                    default:
                        source = "&未知";
                        grep=/query\=.*\&/i;
                        grep1=/query\=.*/i;
                        str=refer.match(grep);
                        str1=refer.match(grep1);
                }
                keyword = checkStr(str,str1);
            }
        }else{
            source = "&无来源";
            keyword = "&无来源";
        }
        return [source,keyword];
    }




