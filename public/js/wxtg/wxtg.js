function setCookie(c_name,value,expireMinutes){
    var exdate=new Date();
    exdate.setMinutes(exdate.getMinutes()+expireMinutes);
    document.cookie=c_name+ "=" +escape(value)+ ((expireMinutes==null) ? "" : ";expires="+exdate.toGMTString());
}
function getCookie(c_name){
    if (document.cookie.length>0){
        c_start=document.cookie.indexOf(c_name + "=");
        if (c_start!=-1){
            c_start=c_start + c_name.length+1;
            c_end=document.cookie.indexOf(";",c_start);
            if (c_end==-1){
                c_end=document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start,c_end));
        }
    }
    return "";
}
var counts;
var cc=getCookie("xx_tg_counts");
if(cc!=""){
    counts=cc;
}else{
    counts=Math.floor(Math.random()*100+1);
    setCookie("xx_tg_counts",counts,5);
}
var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?e407ffbe04bbfe60fdebec03d225a799";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
