<div class="main-banner-wp">
  <div class="block">
    <div class="main-banner" id="slideBox">
        <ul class="main-banner-hd hd">
            <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_70933700_1463730412');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_70933700_1463730412']):
        $this->_foreach['myflash']['iteration']++;
?>
            <li><img src="<?php echo $this->_var['flash_0_70933700_1463730412']['src']; ?>" alt=""><span></span></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="bd">
            <ul class="main-banner-bd">
                <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_70973500_1463730412');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_70973500_1463730412']):
        $this->_foreach['myflash']['iteration']++;
?>
                <li><a href="<?php echo $this->_var['flash_0_70973500_1463730412']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['flash_0_70973500_1463730412']['src']; ?>" alt=""></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#slideBox").slide({
    effect : "fold",
    autoPlay : true,
    mainCell : ".bd ul"
  });
  $(function(){
    $("#slideBox").hover(function(){
        $(this).find(".hd").stop().animate({opacity:1});
    },function(){
        $(this).find(".hd").stop().animate({opacity:0});
    });
  })
</script>