//无下拉的菜单取消hover样式
$(function(){
 var $menuli=$("#Menu").children("ul").children("li");
 if($menuli.size()==0){return;}
 $menuli.bind('mouseenter',function(){
   if($(this).children("ul").size()==0)
    {
     $(this).removeClass("hover");
    }
 });
});

//右侧返回顶部图标
$(function(){
     var icon='<a class="gotoptop_icon" id="gotoptop_icon" href="#" title="返回顶部"></a>';
     var qq_icon = '<a style="z-index: 999;    display: block;\n' +
         '    position: fixed;\n' +
         '    right: 75px;\n' +
         '    bottom: 50%;\n' +
         '    width: 25px;\n' +
         '    height: 0px;\n' +
         '    background: url(images/gotop.png) no-repeat -26px 0px;\n' +
         '    cursor: pointer;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=352164624&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:352164624:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>';
     $("body").append(icon);
     $("body").append(qq_icon);
     var $window=$(window);
     var $gotoptop_icon=$("#gotoptop_icon");
     var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'); // opera fix
     $(window).bind('scroll resize',function(){
        if($window.scrollTop()>0)
         {
          $gotoptop_icon.show();
         }
        else
         {
          $gotoptop_icon.hide();
         }
     });
     $gotoptop_icon.bind('click',function(){
        $body.animate({scrollTop:'0px'},"fast");
         return false;
     });
});



