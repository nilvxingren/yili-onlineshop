<?php if ( extension_loaded('zlib') ) {ob_start('ob_gzhandler');}header("Content-Type: text/javascript"); ?>
var pageLineLimit=3;$(window).load(function(){function j(a){var b=new RegExp("(^|&)"+a+"=([^&]*)(&|$)"),c=window.location.search.substr(1).match(b);return null!=c?unescape(c[2]):null}$(".section_gar .wrap").hover(function(){$(".at_arro_lf,.at_arro_ri").stop().fadeTo(1e3,.5)},function(){$(".at_arro_lf,.at_arro_ri").stop().fadeOut()}),$(".nav-category").hover(function(){$(this).children("#nav-drap-other").stop().slideToggle()}),$(".sidebar-column,.gotop").hover(function(){$(this).find(".sc-tooltip").show(),$(this).find(".sc-tooltip").stop().animate({left:"-57px"},300),$(this).find(".sc-letter").show()},function(){$(this).find(".sc-tooltip").css({left:"-124px"}),$(this).find(".sc-tooltip").hide(),$(this).find(".sc-letter").hide()}),$(".sidebar-column:last-child").css("border","0 none"),$(".nav-main-list li").hover(function(){$(this).children(".nav-drop-down").stop().slideToggle()}),$(".gotop").click(function(){$("html,body").stop().animate({scrollTop:0},1e3)}),$(".uesrname-wrapper").hover(function(){$(".user-drop").stop().slideToggle()}),$(".tip").hover(function(){$(this).children(".tip-arrow").show()},function(){$(this).children(".tip-arrow").hide()}),$(".enroll-now").click(function(){$(this).addClass("current").siblings().removeClass("current"),$(".list-item ul").eq($(this).index()).show().siblings().hide()}),$(".tip").hover(function(){$(this).children(".tip-arrow").show()},function(){$(this).children(".tip-arrow").hide()}),$(".retrieve").click(function(){$(this).siblings(".drop").toggle()}),$(".list-item-btn").click(function(){$(this).siblings(".popup").show()}),$(".close").click(function(){$("#not_login").hide()}),setInterval(function(){$(".endtime").each(function(){var a=$(this),b=new Date(parseInt(a.attr("value"))),c=new Date,d=b.getTime()-c.getTime(),e=Math.floor(d/864e5),f=Math.floor(d/36e5)%24,g=Math.floor(d/6e4)%60,h=Math.floor(d/1e3)%60,i=Math.floor(d/100)%10;if(e>=0)var j=e+"\u5929"+f+"\u5c0f\u65f6"+g+"\u5206"+h+"."+i+"\u79d2";else{a.parent().siblings(".hide-a").html("\u62a2\u5b8c\u5566");var j="\u62a2\u5b8c\u5566"}a.html(j)})},100);var a=$("#page_count b").text(),b='<a class="page-list page_more" href="javascript:void(0);">...</a>',c=window.location.href,d=j("cur_page");d||(d=1,c+="&cur_page=1");var e=parseInt(pageLineLimit);re=new RegExp("cur_page="+d,"g");var f=c.replace(re,"cur_page=1"),g=c.replace(re,"cur_page="+a),h='<a class="page-list page_first" href="'+f+'">1</a>',i='<a class="page-list page_last" href="'+g+'">'+a+"</a>";if(a==e+1?($(".page_next").before(i),d==e+1&&($(".page_prev").after(h),$(".page_first").after(b),$(".page_last").hide())):a==e+2?d==e+1&&($(".page_prev").after(h),$(".page_first").after(b),$(".page_next").before(i)):a>=2*e&&(d>e&&($(".page_prev").after(h),$(".page_first").after(b)),a-d>e-1&&($(".page_next").before(i),$(".page_last").before(b))),$("body").height()<$(window).height()+$(".footer").height()){var k=$(window).height()-($("body").height()-$(".footer").outerHeight())+20;$("#left-nav").css({bottom:k})}$(".footer").offset().top,$(".footer").outerHeight();var n=$("body").height()-$(window).height()-$(".footer").height();$(window).scroll(function(){$(window).scrollTop()>400?$(".left-nav-list,.left-nav-middle").fadeIn():$(".left-nav-list,.left-nav-middle").fadeOut(),$(window).scrollTop()>=n?$("#left-nav").css({bottom:$(window).scrollTop()-n+20}):$("#left-nav").css({bottom:"20px"})})});
<?php if(extension_loaded('zlib')) {ob_end_flush();} ?>