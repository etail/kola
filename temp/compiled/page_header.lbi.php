<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.3.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js')); ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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

<?php if ($this->_var['script_name'] == 'index'): ?>

<div class="top-ad">
    <div class="block">
        <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '顶部横幅广告（宽）',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
</div>
<?php endif; ?>

<div class="header-nav">
    <div class="block">
        <span class="fl gotoindex" style="margin-right:15px;">
        考拉欢迎你！
        </span>
        
        <p class="header-login-info">
            <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </p>
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
            <?php if ($this->_var['navigator_list']['top']): ?>
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <li class="li-home">
                <a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<div class="header-main">
    <div class="block">
        <div class="header-logo header-logo-index">
            <a href="index.php"><img src="themes/ecmoban_kaola2016/images/logo.gif" alt=""></a>
        </div>
        <div class="header-banner w-icon w-icon-28" id="ECS_CARTINFO">
            <a href="flow.php">购物车</a>&nbsp;<span class="cart-num"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span>
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
                    alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                    return false;
                    }
                    }
                    -->
                    
                </script>
            </form>
            <?php if ($this->_var['searchkeywords']): ?>
            <ul class="ul-hot-query">
                <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['keywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['keywords']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['keywords']['iteration']++;
?>
                <li class="<?php if (($this->_foreach['keywords']['iteration'] <= 1)): ?>first<?php endif; ?><?php if ($this->_foreach['keywords']['iteration'] % 2 == 1): ?> highlight<?php endif; ?>"><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="header-menu">
    
    <div class="main-nav clearfix block">
        
        <div class="main-nav-list">
            <a href="index.php" class="cur">首页</a>
            <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['opennew']): ?> target="_blank"<?php endif; ?> <?php if ($this->_var['script_name'] == 'category'): ?><?php endif; ?>>
                <?php echo $this->_var['nav']['name']; ?>
            </a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
