<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="xm-box">
  <h4 class="title"><a class="more" href="search.php?intro=new">更多</a><em>新品上架</em> </h4>
  <div id="show_new_area" class="clearfix body">

    <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_31009000_1511445894');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_31009000_1511445894']):
?>
    <div class="goodsItem"> <a href="<?php echo $this->_var['goods_0_31009000_1511445894']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_31009000_1511445894']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_31009000_1511445894']['name']); ?>" class="goodsimg" /></a><br />
      <p class="name"><a href="<?php echo $this->_var['goods_0_31009000_1511445894']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_31009000_1511445894']['name']); ?>" target="_blank"><?php echo $this->_var['goods_0_31009000_1511445894']['short_style_name']; ?></a></p>
      <div class="info">
        <p class="price">
          <?php if ($this->_var['goods_0_31009000_1511445894']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_31009000_1511445894']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_31009000_1511445894']['shop_price']; ?>
          <?php endif; ?>
        </p>
        <p class="market"><?php echo $this->_var['goods_0_31009000_1511445894']['market_price']; ?></p>
        <a href="<?php echo $this->_var['goods_0_31009000_1511445894']['url']; ?>" class="buy" target="_blank">立即购买</a>
      </div>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</div>
<div class="blank"></div>
<?php endif; ?>
<?php endif; ?>
