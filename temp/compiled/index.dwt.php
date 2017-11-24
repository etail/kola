<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page" style="min-width:1200px;">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script type="text/javascript">
  $(function(){
      //如果是首页，让分类树直接显示
      $(".cate-tree").each(function(){
        var _this = $(this);
        _this.removeClass("none").addClass("cate-tree-index");
      });
  });
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.js')); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div class="indexw_content">
<div class="block clearfix" >
<div class="AreaL">
 
<?php echo $this->fetch('library/new_articles.lbi'); ?>
  


<?php $this->assign('ads_id','159'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<div class="Arear">

<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>
 
</div> 
  <div class="goodsBox_1">
  

  
  
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>

</div> 
</div>
  

 </div>
<div class="bottom_ad">
            


</div>
<div class="resetClear"></div>

    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
