$(function(){var $icon_con=$(".tem59-header .header59 .icon");$icon_con.find(".Languag_one").click(function(e){$icon_con.find(".language").stop().slideToggle();e.stopPropagation()});$icon_con.find(".fangda").click(function(e){e.stopPropagation();$icon_con.find(".search2_form").toggle()});$icon_con.find(".search2_form").click(function(e){e.stopPropagation()});$icon_con.find(".search2_form .searchbox").click(function(e){e.stopPropagation();$(this).parent().css("display","none")});$icon_con.on("click",".people-login",function(e){e.stopPropagation();$icon_con.find(".person").stop().slideToggle()});$icon_con.find(".language").click(function(e){e.stopPropagation()});$icon_con.find(".person").click(function(e){e.stopPropagation()});var nav_div_w=0;function jisuanw59(){var nav_div_w2=0;var nav_div_h=0;$(".tem59-header .navigation>div").each(function(){nav_div_w2+=$(this).width();nav_div_w=nav_div_w2;nav_div_h+=$(this).height()});if($(window).width()<992){if(nav_div_h>400){$(".tem59-header .navhidd").css("overflow-y","scroll")}else{$(".tem59-header .navhidd").css("overflow-y","hidden")}}
if($(window).width()>992){var tem_header_nav=$(".tem59-header .navigation_0").parent().width()-$(".tem59-header .header59 .logo").width()-$(".tem59-header .header59 .search_box").outerWidth()-50;$(".tem59-header .navigation_0").css("max-width",tem_header_nav);$(".tem59-header .navigation_0").css("width",nav_div_w);if(nav_div_w<=tem_header_nav){$(".tem59-header .navigation_0 .right").css("display","none");$(".tem59-header .navhidd").css("overflow","initial")}else{$(".tem59-header .navhidd").css("overflow","hidden")}}}
jisuanw59();setTimeout(function(){jisuanw59()},1000);var $navigation=$(".tem59-header .navigation .ul_xu")
$navigation.click(function(e){e.stopPropagation();$(this).parent().find(">.ul_xu").not($(this)).find("ul").stop().slideUp();$(this).find(">ul").stop().slideToggle("swing",function(){jisuanw59()})});var header59_bol=!0;$(window).resize(function(){if($(window).width()>992){$(".tem59-header .navigation_0").css("display","block");$(".navigation_0 .right").css("display","block");$(".tem59-header .navhidd").css("height","40px");jisuanw59()}else{$(".tem59-header .navigation_0").css("display","none");$(".navigation_0 .right").css("display","none");$(".navigation_0 .left").css("display","none");$(".tem59-header .navhidd").css("height","auto")}
$(".tem59-header .navigation").css("left",0);$(".tem59-header .navigation_0 .left").css("display","none");$navigation.find(">ul").css("display","none");$icon_con.find(".language").css("display","none");$(".tem59-header .header59 .switch").removeClass("bg-color")});$(".tem59-header .header59 .switch").click(function(){if(!header59_bol){return}
header59_bol=!1;$(this).toggleClass("bg-color");if($(".tem59-header .navigation_0").css("display")=="none"){$(".tem59-header .navigation_0").css({display:"block","max-width":"100%"});header59_bol=!0;jisuanw59()}else{$(".tem59-header .navigation_0").animate({left:"-100%"},300,function(){$(".tem59-header .navigation_0").css({"display":"none","left":"0"});header59_bol=!0})}});$(document).click(function(){$icon_con.find(".language").css("display","none");$navigation.find(">ul").css("display","none");$icon_con.find(".person").css("display","none");$icon_con.find(".search2_form").css("display","none")});var navdoing=150;var navleft=0;$(".tem59-header .navigation_0 .left").click(function(){$(".tem59-header .navigation_0 .right").css("display","block");navleft=$(".tem59-header .navigation").position().left+navdoing;$(".tem59-header .navigation").css({left:navleft});if(navleft>=0){$(".tem59-header .navigation").css({left:0});$(this).css("display","none")}});$(".tem59-header .navigation_0 .right").click(function(){$(".tem59-header .navigation_0 .left").css("display","block");navleft=$(".tem59-header .navigation").position().left-navdoing;$(".tem59-header .navigation").css({left:navleft});if(navleft<=$(".tem59-header .navhidd").width()-nav_div_w-100){$(this).css("display","none")}});$(".tem59-header .navigation .ul_xu").hover(function(){var wid=$(window).width();if(wid<=992){return}
$(this).find(">ul").css("display","block");if($(this).is(".active")){return}
$(this).addClass("bg-color")},function(){var wid=$(window).width();if(wid<=992){return}
$(this).find(">ul").css("display","none");if($(this).is(".active")){return}
$(this).removeClass("bg-color")});$(".tem59-header .navigation").hover(function(){var wid=$(window).width();if(wid<=992){return}
$(".tem59-header .navhidd").css("height","600px")},function(){var wid=$(window).width();if(wid<=992){return}
$(".tem59-header .navhidd").css("height","40px")});$(window).scroll(function(){if($(window).width()<=992){$(".tem59-header .header59").removeClass("tem59-header-donghua")}else{var wind_top=30;var winSt=$(window).scrollTop();if(winSt>wind_top){$(".tem59-header .header59").addClass("tem59-header-donghua")}else{$(".tem59-header .header59").removeClass("tem59-header-donghua")}}});$(".tem59-header .header59").removeClass("tem59-header-donghua");new relate_search($('.tem59-header .header59 .search_form input'));new relate_search($('.tem59-header .header59 .icon .search2_form input'));if(get_siteInfo(['member','status'])=='OPEN'){$.ajax({url:"/member/islogin",type:'GET',dataType:"json",success:function(json){if(json.status==1){$("#login-static").html("<span class='icon-people2'></span><span class='people-login'><?= $this->l('member_home'); ?></span><ul class='person'><li><a href='/member/index'>"+json.data.username+"</a></li></ul>")}}})}})