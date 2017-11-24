<?php exit;?>a:3:{s:8:"template";a:7:{i:0;s:61:"/data/mbkaola2016/themes/ecmoban_kaola2016/group_buy_list.dwt";i:1;s:66:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/page_header.lbi";i:2;s:62:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/ur_here.lbi";i:3;s:68:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/category_tree.lbi";i:4;s:62:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/history.lbi";i:5;s:60:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/pages.lbi";i:6;s:66:"/data/mbkaola2016/themes/ecmoban_kaola2016/library/page_footer.lbi";}s:7:"expires";i:1511449507;s:8:"maketime";i:1511445907;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>团购商品_ECSHOP模板堂（www.ecmoban.com）专业ECSHOP模板制作 ECSHOP模板定制_ECSHOP模板修改_ECSHOP模板出售_ECSHOP模板案例 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_kaola2016/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header-nav">
    <div class="block">
        <span class="fl gotoindex" style="margin-right:15px;">
        考拉欢迎你！
        </span>
        
        <p class="header-login-info">
            554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca        </p>
        <a href="javascript:;" class="fl nav-mobile" style="">
            <i class="iconfont">&#xe615;</i>手机考拉海购
            <span class="nav-mobile-sub"><img src="themes/ecmoban_kaola2016/images/2dcode-app3.jpg" alt=""></span>
        </a>
        
        <ul class="ul-quick-menu">
            <li class="li-my menu-item">
                <a href="user.php"  class="menu-hd my_user">个人中心<b></b></a>
                <div class="menu-bd">
                    <a href="user.php?act=order_list">我的订单</a>
                    <a href="user.php?act=account_log">我的余额</a>
                    <a href="user.php?act=collection_list" >我的收藏</a>
                    <a href="user.php?act=bonus">我的红包</a>
                </div>
            </li>
            <li class="li-sep"></li>
                    </ul>
    </div>
</div>
<div class="header-main">
    <div class="block">
        <div class="header-logo header-logo-index">
            <a href="index.php"><img src="themes/ecmoban_kaola2016/images/logo.gif" alt=""></a>
        </div>
        <div class="header-banner w-icon w-icon-28" id="ECS_CARTINFO">
            <a href="flow.php">购物车</a>&nbsp;<span class="cart-num">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span>
        </div>
        
        <div class="mall-search">
            <form method="get" action="search.php" onSubmit="return checkSearchForm(this)" class="mallSearch-form">
                <div class="mallSearch-input-wp">
                    <input type="text" name="keywords" id="mq" class="mallSearch-input" value="营养辅食" onfocus="javascript:if(this.value=='营养辅食'){this.value=''}" onblur="javascript:if(this.value==''){this.value='营养辅食'}" >
                    <label for="mq"></label>
                </div>
                <button type="submit" class="w-icon w-icon-27"></button>
                <script type="text/javascript">
                    
                    <!--
                    function checkSearchForm()
                    {
                    if(document.getElementById('keyword').value)
                    {
                    return true;
                    }
                    else
                    {
                    alert("请输入搜索关键词！");
                    return false;
                    }
                    }
                    -->
                    
                </script>
            </form>
                        <ul class="ul-hot-query">
                                <li class="first highlight"><a href="search.php?keywords=%E5%A5%B3%E5%8C%85" target="_blank">女包</a></li>
                                <li class=""><a href="search.php?keywords=%E9%9D%A2%E8%86%9C" target="_blank">面膜</a></li>
                                <li class=" highlight"><a href="search.php?keywords=MK" target="_blank">MK</a></li>
                                <li class=""><a href="search.php?keywords=%E5%8D%A1%E4%B9%90%E6%AF%94" target="_blank">卡乐比</a></li>
                                <li class=" highlight"><a href="search.php?keywords=new+balance" target="_blank">new balance</a></li>
                                <li class=""><a href="search.php?keywords=%E9%9B%B7%E6%9C%8B" target="_blank">雷朋</a></li>
                                <li class=" highlight"><a href="search.php?keywords=%E9%98%B2%E6%99%92" target="_blank">防晒</a></li>
                            </ul>
                    </div>
    </div>
</div>
<div class="header-menu">
    
    <div class="main-nav clearfix block">
        
        <div class="main-nav-list">
            <a href="index.php" class="cur">首页</a>
                        <a href="category.php?id=407" >
                彩妆            </a>
                        <a href="category.php?id=409" >
                美发            </a>
                        <a href="category.php?id=299" >
                化妆品            </a>
                        <a href="group_buy.php" >
                团购商品            </a>
                        <a href="exchange.php" >
                积分商城            </a>
                        <a href="http://0769web.taobao.com" >
                技术支持            </a>
                    </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
    $(".cate-tree-item,.menu-item").hover(function(){
      $(this).addClass("hover");
    },function(){
      $(this).removeClass("hover");
    });
    //鼠标经过离开分类
      $(".cate-tree-item").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //鼠标经过离开分类面板
      $(".cate-panel").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //显示隐藏分类树方法
      function toggleCatePanel(i, show){
        var $panel = $(".cate-panel").eq(i);
        if(show){
          $panel.show();
        }else{
          $panel.hide();
        }
      }
      //首页之外其它页面分类树显示
      $(".cate-tree-all,.cate-tree").hover(function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
            if($.trim($(".ul-cate-tree").html()).length != 0){//如果分类里有内容
                $(".cate-tree").removeClass("none");
            }
        }
      },function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
          $(".cate-tree").addClass("none");
        }
      });
    });
  //禁止鼠标滚动事件冒泡
  $.fn.extend({
    "preventScroll":function(){
        $(this).each(function(){
            var _this = this;
            if(navigator.userAgent.indexOf('Firefox') >= 0){   //firefox
                _this.addEventListener('DOMMouseScroll',function(e){
                    _this.scrollTop += e.detail > 0 ? 60 : -60;
                    e.preventDefault();
                },false);
            }else{
                _this.onmousewheel = function(e){
                    e = e || window.event;
                    _this.scrollTop += e.wheelDelta > 0 ? -60 : 60;
                    return false;
                };
            }
        })
    }
});
$(".cate-panel .left-part").preventScroll();
</script>
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="group_buy.php">团购商品</a> 
</div>
</div>
<div class="blank"></div><div class="block clearfix">
  
  <div class="AreaL">
    
  
    
<div id="category_tree">
<div class="tit">所有商品分类</div>
<dl class="clearfix" style=" overflow:hidden;" >
<div class="box1 cate" id="cate">
    <h1 onclick="tab(0)"   style="border-top:none"   >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   style="border-top:none"  href="category.php?id=295" class="  f_ll" >服饰</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=304">女装</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=307">T恤</a>
            <a class="over_3" href="category.php?id=308">Polo</a>
            <a class="over_3" href="category.php?id=309">外套</a>
            <a class="over_3" href="category.php?id=310">毛衣</a>
            <a class="over_3" href="category.php?id=311">针织衫</a>
            <a class="over_3" href="category.php?id=312">衬衫</a>
            <a class="over_3" href="category.php?id=313">连身裙</a>
            <a class="over_3" href="category.php?id=314">半截裙</a>
            <a class="over_3" href="category.php?id=315">休闲裤</a>
            <a class="over_3" href="category.php?id=316">牛仔裤</a>
            <a class="over_3" href="category.php?id=317">内衣(抹胸)</a>
            <a class="over_3" href="category.php?id=318">内裤</a>
          </div>
        <a class="over_2" href="category.php?id=305">男装</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=319">T恤</a>
            <a class="over_3" href="category.php?id=320">Polo</a>
            <a class="over_3" href="category.php?id=321">针织衫</a>
            <a class="over_3" href="category.php?id=322">衬衫</a>
            <a class="over_3" href="category.php?id=323">卫衣</a>
            <a class="over_3" href="category.php?id=324">外套</a>
            <a class="over_3" href="category.php?id=325">休闲裤</a>
            <a class="over_3" href="category.php?id=326">牛仔裤</a>
            <a class="over_3" href="category.php?id=327">袜子</a>
            <a class="over_3" href="category.php?id=328">皮带</a>
            <a class="over_3" href="category.php?id=329">夹克</a>
            <a class="over_3" href="category.php?id=330">泳裤</a>
          </div>
        <a class="over_2" href="category.php?id=306">童装</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=331">女童背心</a>
            <a class="over_3" href="category.php?id=332">女童T恤</a>
            <a class="over_3" href="category.php?id=333">女童针织衫</a>
            <a class="over_3" href="category.php?id=334">女童连身裙</a>
            <a class="over_3" href="category.php?id=335">女童裤</a>
            <a class="over_3" href="category.php?id=336">男童背心</a>
            <a class="over_3" href="category.php?id=337">男童T恤</a>
            <a class="over_3" href="category.php?id=338">男童针织衫</a>
            <a class="over_3" href="category.php?id=339">男童衬衫</a>
            <a class="over_3" href="category.php?id=340">男童外套</a>
            <a class="over_3" href="category.php?id=341">男童裤</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(1)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=296" class="  f_ll" >鞋类</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=342">男鞋</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=363">休闲鞋</a>
            <a class="over_3" href="category.php?id=364">皮鞋</a>
            <a class="over_3" href="category.php?id=365">凉鞋</a>
            <a class="over_3" href="category.php?id=366">跑鞋</a>
            <a class="over_3" href="category.php?id=367">靴</a>
            <a class="over_3" href="category.php?id=368">拖鞋</a>
            <a class="over_3" href="category.php?id=369">篮球鞋</a>
            <a class="over_3" href="category.php?id=370">网球鞋</a>
            <a class="over_3" href="category.php?id=371">登山鞋</a>
          </div>
        <a class="over_2" href="category.php?id=343">女鞋</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=355">高跟鞋</a>
            <a class="over_3" href="category.php?id=356">凉鞋</a>
            <a class="over_3" href="category.php?id=357">休闲鞋</a>
            <a class="over_3" href="category.php?id=358">皮鞋</a>
            <a class="over_3" href="category.php?id=359">单鞋</a>
            <a class="over_3" href="category.php?id=360">运动鞋</a>
            <a class="over_3" href="category.php?id=361">靴</a>
            <a class="over_3" href="category.php?id=362">拖鞋</a>
          </div>
        <a class="over_2" href="category.php?id=344">童鞋</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=345">女童凉鞋</a>
            <a class="over_3" href="category.php?id=346">女童单鞋</a>
            <a class="over_3" href="category.php?id=347">女童运动鞋</a>
            <a class="over_3" href="category.php?id=348">男童凉鞋</a>
            <a class="over_3" href="category.php?id=349">男童单鞋</a>
            <a class="over_3" href="category.php?id=350">男童皮鞋</a>
            <a class="over_3" href="category.php?id=351">男童休闲鞋</a>
            <a class="over_3" href="category.php?id=352">男童运动鞋</a>
            <a class="over_3" href="category.php?id=353">女童拖鞋</a>
            <a class="over_3" href="category.php?id=354">男童拖鞋</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(2)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=297" class="  f_ll" >箱包</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=372">女包</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=382">钱包</a>
            <a class="over_3" href="category.php?id=383">手提包</a>
            <a class="over_3" href="category.php?id=384">手袋</a>
            <a class="over_3" href="category.php?id=385">背包</a>
            <a class="over_3" href="category.php?id=386">腰包</a>
          </div>
        <a class="over_2" href="category.php?id=373">男包</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=379">钱包</a>
            <a class="over_3" href="category.php?id=380">提包/挎包</a>
            <a class="over_3" href="category.php?id=381">背包</a>
          </div>
        <a class="over_2" href="category.php?id=374">商务包</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=378">商务包</a>
          </div>
        <a class="over_2" href="category.php?id=375">运动/旅行包</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=376">运动包</a>
            <a class="over_3" href="category.php?id=377">拉杆箱</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(3)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=298" class="  f_ll" >配饰</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=387">饰品</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=398">戒指</a>
            <a class="over_3" href="category.php?id=399">项链/吊坠/胸针</a>
            <a class="over_3" href="category.php?id=400">耳环耳钉</a>
            <a class="over_3" href="category.php?id=401">手链/手镯</a>
            <a class="over_3" href="category.php?id=402">脚链</a>
            <a class="over_3" href="category.php?id=403">发夹</a>
            <a class="over_3" href="category.php?id=404">手机挂饰</a>
            <a class="over_3" href="category.php?id=405">套装</a>
          </div>
        <a class="over_2" href="category.php?id=388">手表</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=397">手表</a>
          </div>
        <a class="over_2" href="category.php?id=389">眼镜</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=395">眼镜</a>
            <a class="over_3" href="category.php?id=396">太阳眼镜</a>
          </div>
        <a class="over_2" href="category.php?id=390">烟具</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=394">打火机</a>
          </div>
        <a class="over_2" href="category.php?id=391">珠宝玉器</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=392">珠宝挂饰</a>
            <a class="over_3" href="category.php?id=393">珠宝摆件</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(4)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=299" class="  f_ll" >化妆品</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=406">护肤品</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=433">面膜</a>
            <a class="over_3" href="category.php?id=434">眼霜/眼膜</a>
            <a class="over_3" href="category.php?id=435">卸妆</a>
            <a class="over_3" href="category.php?id=436">去角质/磨砂</a>
            <a class="over_3" href="category.php?id=437">隔离霜/乳</a>
            <a class="over_3" href="category.php?id=438">套装组合</a>
            <a class="over_3" href="category.php?id=439">鼻贴膜</a>
          </div>
        <a class="over_2" href="category.php?id=407">彩妆</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=425">BB霜</a>
            <a class="over_3" href="category.php?id=426">唇彩</a>
            <a class="over_3" href="category.php?id=427">护甲</a>
            <a class="over_3" href="category.php?id=428">睫毛膏</a>
            <a class="over_3" href="category.php?id=429">腮红/胭脂</a>
            <a class="over_3" href="category.php?id=430">遮瑕</a>
            <a class="over_3" href="category.php?id=431">粉底</a>
            <a class="over_3" href="category.php?id=432">眼线</a>
          </div>
        <a class="over_2" href="category.php?id=408">美体</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=420">足手部护理</a>
            <a class="over_3" href="category.php?id=421">身体润肤乳</a>
            <a class="over_3" href="category.php?id=422">磨砂膏</a>
            <a class="over_3" href="category.php?id=423">沐浴乳</a>
            <a class="over_3" href="category.php?id=424">美体其它</a>
          </div>
        <a class="over_2" href="category.php?id=409">美发</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=416">染发</a>
            <a class="over_3" href="category.php?id=417">护发</a>
            <a class="over_3" href="category.php?id=418">头发造型</a>
            <a class="over_3" href="category.php?id=419">洗头水</a>
          </div>
        <a class="over_2" href="category.php?id=410">香水/香氛系列</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=411">男性香水</a>
            <a class="over_3" href="category.php?id=412">香体膏</a>
            <a class="over_3" href="category.php?id=413">中性香水</a>
            <a class="over_3" href="category.php?id=414">身体香氛</a>
            <a class="over_3" href="category.php?id=415">女性香水</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(5)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=300" class="  f_ll" >3C产品</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=440">数码电子</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=442">数码配件</a>
          </div>
        <a class="over_2" href="category.php?id=441">小家电</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=443">搅拌机</a>
            <a class="over_3" href="category.php?id=444">电子按摩器</a>
            <a class="over_3" href="category.php?id=445">咖啡机</a>
            <a class="over_3" href="category.php?id=446">电磁炉</a>
            <a class="over_3" href="category.php?id=447">吸尘器</a>
            <a class="over_3" href="category.php?id=448">电吹风</a>
            <a class="over_3" href="category.php?id=449">灭蚊灯</a>
            <a class="over_3" href="category.php?id=450">豆浆机</a>
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(6)"    >
  <span class="f_l"><img src="themes/ecmoban_kaola2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=301" class="  f_ll" >家居百货</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=451">厨具/餐具</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=454">杯具</a>
            <a class="over_3" href="category.php?id=455">厨房刀具</a>
            <a class="over_3" href="category.php?id=456">烹饪锅具</a>
            <a class="over_3" href="category.php?id=457">厨房容器</a>
            <a class="over_3" href="category.php?id=458">收纳用品</a>
            <a class="over_3" href="category.php?id=459">保鲜盒</a>
          </div>
        <a class="over_2" href="category.php?id=452">寝具/浴具</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=460">床上用品</a>
            <a class="over_3" href="category.php?id=461">靠枕/抱枕</a>
            <a class="over_3" href="category.php?id=462">毛毯</a>
            <a class="over_3" href="category.php?id=463">沐浴容器</a>
            <a class="over_3" href="category.php?id=464">卫浴</a>
          </div>
        <a class="over_2" href="category.php?id=453">刀具</a>
    <div class="clearfix">
            <a class="over_3" href="category.php?id=465">军刀</a>
          </div>
      </ul>
  <div style="clear:both"></div>
  </div>
<div style="clear:both"></div>
</div>
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_kaola2016/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_kaola2016/images/btn_unfold.gif"
		}
}
</script>
    
    
    
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="box">
   <div class="box_1">
    <h3><span>团购商品：</span></h3>
    <div class="boxCenterList">
                  <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=42"><img src="images/201406/thumb_img/205_thumb_G_1403136408565.jpg" border="0" alt="candy moyo cm637珐琅红（草莓香味）8ml" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=42" class="f5">candy moyo cm637珐琅红（草莓香味）8ml</a><br />
      起止时间：2014-07-10 00:00:00 -- 2021-07-12 00:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">2</td>
         <td width="71%" bgcolor="#FFFFFF">￥200元</td>
        </tr>
              </table>
      </li>
      </ul>
            <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=39"><img src="images/201406/thumb_img/203_thumb_G_1403136216478.jpg" border="0" alt="小迷糊 美白嫩肤补水蚕丝面膜套装" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=39" class="f5">小迷糊 美白嫩肤补水蚕丝面膜套装</a><br />
      起止时间：2014-06-25 00:00:00 -- 2015-06-25 00:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥69元</td>
        </tr>
              </table>
      </li>
      </ul>
            <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=38"><img src="images/201406/thumb_img/202_thumb_G_1403135666809.jpg" border="0" alt="诗妃 玫瑰嫩白润手霜 60g" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=38" class="f5">诗妃 玫瑰嫩白润手霜 60g</a><br />
      起止时间：2014-06-25 00:00:00 -- 2015-06-25 00:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥59元</td>
        </tr>
              </table>
      </li>
      </ul>
            <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=37"><img src="images/201406/thumb_img/196_thumb_G_1403132759548.jpg" border="0" alt="VEECCI唯资 超完美持久水眉笔104#灰色 1.5g" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=37" class="f5">VEECCI唯资 超完美持久水眉笔104#灰色 1.5g</a><br />
      起止时间：2014-06-25 00:00:00 -- 2022-06-06 00:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥50元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">20</td>
         <td width="71%" bgcolor="#FFFFFF">￥40元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">30</td>
         <td width="71%" bgcolor="#FFFFFF">￥30元</td>
        </tr>
              </table>
      </li>
      </ul>
            <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=36"><img src="images/201406/thumb_img/195_thumb_G_1403132067629.jpg" border="0" alt="圣荷stherb LoveBank[TangerineDream]佛罗蒙女用香水30ml" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=36" class="f5">圣荷stherb LoveBank[TangerineDream]佛罗蒙女用香水30ml</a><br />
      起止时间：2014-06-25 00:00:00 -- 2022-06-13 00:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥59元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">20</td>
         <td width="71%" bgcolor="#FFFFFF">￥55元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">30</td>
         <td width="71%" bgcolor="#FFFFFF">￥49元</td>
        </tr>
              </table>
      </li>
      </ul>
                </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="/group_buy.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>5</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>
  
</div>
<div class="blank"></div>
<div class="footer">
    <div class="footer-ensure">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
    <div class="footer-desc clearfix">
                        <dl >
            <dt>服务保障</dt>
            <dd>
                                <a href="article.php?id=79" title="正品保证">正品保证</a>
                                <a href="article.php?id=80" title="7天无理由退货">7天无理由退货</a>
                                <a href="article.php?id=81" title="退货返运费">退货返运费</a>
                                <a href="article.php?id=82" title="7x15小时客户服务">7x15小时客户服务</a>
                            </dd>
        </dl>
                                <dl >
            <dt>购物指南</dt>
            <dd>
                                <a href="article.php?id=83" title="导购演示">导购演示</a>
                                <a href="article.php?id=84" title="订单操作">订单操作</a>
                                <a href="article.php?id=85" title="会员注册">会员注册</a>
                                <a href="article.php?id=86" title="账户管理">账户管理</a>
                                <a href="article.php?id=87" title="收货样品">收货样品</a>
                                <a href="article.php?id=88" title="会员等级">会员等级</a>
                            </dd>
        </dl>
                                <dl >
            <dt>支付方式</dt>
            <dd>
                                <a href="article.php?id=89" title="23家主流网银支付">23家主流网银支付</a>
                                <a href="article.php?id=90" title="货到付款">货到付款</a>
                                <a href="article.php?id=91" title="支付宝、银联等支付">支付宝、银联等支付</a>
                                <a href="article.php?id=92" title="信用卡支付">信用卡支付</a>
                                <a href="article.php?id=93" title="唯品钱包支付">唯品钱包支付</a>
                            </dd>
        </dl>
                                <dl >
            <dt>配送方式</dt>
            <dd>
                                <a href="article.php?id=94" title="全场满288元免运费">全场满288元免运费</a>
                                <a href="article.php?id=95" title="配送范围及运费">配送范围及运费</a>
                                <a href="article.php?id=96" title="验货与签收">验货与签收</a>
                            </dd>
        </dl>
                                <dl class="contact-us">
            <dt>售后服务</dt>
            <dd>
                                <a href="article.php?id=97" title="退货政策">退货政策</a>
                                <a href="article.php?id=98" title="退货流程">退货流程</a>
                                <a href="article.php?id=99" title="退款方式和时效">退款方式和时效</a>
                            </dd>
        </dl>
                        <dl class="qr-code">
            <dt><span class="on">ECjia</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>ECtouch</span></dt>
            <dd>
                <img src="themes/ecmoban_kaola2016/images/ECJia_code.png" alt="">
                <img class="none" src="themes/ecmoban_kaola2016/images/ECtouch_code.png">
            </dd>
        </dl>
    </div>
    <div class="footer-copyright">
        <div class="container">
             
            <p class="footer-nav">
                 
                <a href="article.php?id=79" >正品保证</a> 
                 
                <a href="article.php?id=85" >会员注册</a> 
                 
                <a href="article.php?id=87" >收货样品</a> 
                 
                <a href="article.php?id=83" >导购演示</a> 
                 
                <a href="article.php?id=86" >账户管理</a> 
                 
                <a href="article.php?id=90" >货到付款</a> 
                 
                <a href="article.php?id=97" >退货政策</a> 
                 
                <a href="article.php?id=98" >退货流程</a> 
                 
            </p>
                                    <span style="color:#909090;">
                         
             
            Tel: 400-000-000             
                        </span>
            <div class="d-copyright">
                <p></p>
                <b>
                    &copy; 2005-2017 ECSHOP模板堂 版权所有，并保留所有权利。                                    </b>
                <p class="pc-copyright">
                    <a href="#" target="_blank"><img src="themes/ecmoban_kaola2016/images/banquan_1.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_kaola2016/images/banquan_2.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_kaola2016/images/banquan_3.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_kaola2016/images/banquan_4.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_kaola2016/images/banquan_5.jpg"></a>
                </p>
            </div>
            <div style="text-align:center; padding:0 0 20px 0;"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_kaola2016/images/ecmoban.gif" alt="ECShop模板" /></a></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".qr-code dt span").hover(function(){
            var index = $(this).index();
            $(this).addClass("on").siblings().removeClass("on");
            $(".qr-code dd img").eq(index).removeClass("none").siblings().addClass("none");
        });
    })
</script>
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>
      9:00-18:00</div>
    <div class="con">
      <ul>
        
         
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=123456&amp;Site=ECSHOP模板堂&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:123456:4" height="16" border="0" alt="QQ" /> 123456</a> </li>
         
         
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=234567&amp;Site=ECSHOP模板堂&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:234567:4" height="16" border="0" alt="QQ" /> 234567</a> </li>
         
         
         
                <li><a href="http://amos1.taobao.com/msg.ww?v=2&uid=123456789&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=123456789&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />123456789</a></li>
         
         
         
         
         
         
         
         
         
         
         
        
                <li> 服务热线: 400-000-000</li>
              </ul>
    </div>
    <div class="b"></div>
  </div>
  <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="themes/ecmoban_kaola2016/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script> 
</body>
</html>
