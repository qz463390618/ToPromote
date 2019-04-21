/**
 * Created by ming.yu on 2015/9/9.
 */
;(function(){
    var protocol = location.protocol;
    var queryStr = {},bid,_getQueryStr = function(){
        var obj = {} , item = [];
        var search = location.search.replace('?','').split('&');
        for(var i = 0 ; i < search.length; i++){
            item = search[i].split('=');
            obj[item[0]] = item[1];
        }
        return obj;
    };

    queryStr = _getQueryStr();
    bid = queryStr.bid;

    if(bid && undefined != bid){
        bid = $.trim(decodeURIComponent(queryStr.bid));
        $.ajax({
            url : protocol + '//api.baidao.com/dataplatform/api/2/qq/dispatch.json',
            data : {bid : bid},
            dataType : 'jsonp',
            success : function(data){
                if(data && data.code == "1"){
                    if($('.qq-link').length){
                        if(((data.url).match('http://www.tiantong99.com')) != null){
                            var newurl = (data.url).replace('http://www.tiantong99.com',protocol + '//img.baidao.com')
                            $('.qq-link').attr('src',newurl);
                        }else{
                            $('.qq-link').attr('src',data.url);
                        }
                    }else{
                        console.log('NO Element ClassName 锛歲q-link!');
                    }
                    if($('.qq-groupNo').length){
                        $('.qq-groupNo').text(data.qq);
                    }else{
                        console.log('NO Element ClassName 锛歲q-groupNo!');
                    }
                }else{
                    console.log("access server failed ,response-> ");
                    console.log(data);
                }
            },
            error : function(xhr){
                console.log(xhr);
            }

        })
    }else{
        return;
    }

    headFoot();

    function headFoot(){
        var head = document.getElementById('headIframe'),
            foot = document.getElementById('footIframe')
        var win98 = /win\.98\.cn/.test(location.href)
            ,winBaidao = /win\.baidao\.com/.test(location.href)
            ,winTiantong99 = /win\.tiantong99\.com/.test(location.href)
            ,winTiantong999 = /win\.tiantong999\.com/.test(location.href)
            ,winShiyou66 = /win\.shiyou66\.com/.test(location.href)
            ,win5800 = /win\.5800\.com/.test(location.href)
            ,winYintx = /win\.yintx\.cn/.test(location.href)
            ,winYinRui99 = /win\.yinrui99\.com/.test(location.href)
        if(!head || !foot){
            return;
        }
        if(/head\/head/.test(head.src)){   //宸茬粡淇敼杩噄frame浜�
            return;
        }
        if(win98){
            this.head = 1;
        }else if(winTiantong99){
            this.head = 2;
        }else if(winTiantong999){
            this.head = 3;
        }else if(winShiyou66 || win5800){
            this.head = 4;
        }else if(winYinRui99){
            this.head = 6;
        }else if(winYintx){
            this.head = 9;
        }

        head.src = headFootBaseUrl + '/head/head' + this.head + '.html';
        foot.src = headFootBaseUrl + '/foot/foot' + this.head + '.html';
    }

})();