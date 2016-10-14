<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:22
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtcouponpop/views/templates/hook/wtcouponpop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7395120295800f95a0faa69-26081469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37d77f2b5b270699c918d435e2d29de2fa5a5ee' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtcouponpop/views/templates/hook/wtcouponpop.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7395120295800f95a0faa69-26081469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wt_coupon_url' => 0,
    'newsletter_setting' => 0,
    'cookies_time' => 0,
    'voucher_code' => 0,
    'show_voucher' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f95a1bc132_74879252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f95a1bc132_74879252')) {function content_5800f95a1bc132_74879252($_smarty_tpl) {?>
<div class="banner-special">
	<div class="container">
<script type="text/javascript">
    var wt_coupon_url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wt_coupon_url']->value, ENT_QUOTES, 'UTF-8', true);?>
";
	var cookies_time = <?php echo intval($_smarty_tpl->tpl_vars['newsletter_setting']->value['cookies_time']);?>
;
</script>
<?php if ($_smarty_tpl->tpl_vars['newsletter_setting']->value) {?>
<div id="overlay" style="<?php if ($_smarty_tpl->tpl_vars['cookies_time']->value>0) {?>display: none;<?php }?>" onclick="closeDialog(cookies_time)"></div>
<?php if ($_smarty_tpl->tpl_vars['newsletter_setting']->value['background']!='') {?>
<div class="wt-popup" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsletter_setting']->value['background'], ENT_QUOTES, 'UTF-8', true);?>
);<?php if ($_smarty_tpl->tpl_vars['cookies_time']->value>0) {?>display: none;<?php }?>">
<?php } else { ?>
<div class="wt-popup">
<?php }?>
	
    <div class="inner">
		<div class="clearfix newsletter-content">
			<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['newsletter_setting']->value['content']);?>

		</div>
		<div class="newsletter-form">
			<div class="g-newsletter-form">
				<input class="input-email" id="input-email" type="text" name="email" size="18" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email...','mod'=>'wtcouponpop'),$_smarty_tpl);?>
" value="" />                    
				<a onclick="regisNewsletter()" name="submitNewsletter" class="btn btn-default button"><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'wtcouponpop'),$_smarty_tpl);?>
</a>
			</div>
			
			
			<div class="g-check">                    
				<div class="checkbox">
					<input id="notshow" name="notshow" type="checkbox" value="1">
					<?php echo smartyTranslate(array('s'=>'Do not show this popup again','mod'=>'wtcouponpop'),$_smarty_tpl);?>

				</div>
			</div>
			<div id="regisNewsletterMessage"></div>
			<div class="wt-popup-close"><a href="javascript:void(0)" onclick="closeDialog(cookies_time)">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wt_coupon_url']->value, ENT_QUOTES, 'UTF-8', true);?>
/views/img/icon-close.png" alt="icon close"/> </a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['voucher_code']->value!='') {?>
			<div class="coupon-side clearfix">
				<div class="coupon-wrapper clearfix">
					<div id="coupon-element" class="coupon" >
						<div class="scissors"></div>
						<div class="dashed-border">
							<span id="coupon-text-before"  style="<?php if ($_smarty_tpl->tpl_vars['show_voucher']->value==1) {?>display: none;<?php } else { ?>display: block;<?php }?>">
							<?php echo smartyTranslate(array('s'=>'Coupon will be shown here','mod'=>'wtcouponpop'),$_smarty_tpl);?>
</span>
							<span id="coupon-text-after" style="<?php if ($_smarty_tpl->tpl_vars['show_voucher']->value==1) {?>display: block;<?php } else { ?>display: none;<?php }?>"><?php echo smartyTranslate(array('s'=>'Voucher Code','mod'=>'wtcouponpop'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher_code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
    </div>    
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'regisNewsletterMessage')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'regisNewsletterMessage'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You have just subscribled successfully!','js'=>1,'mod'=>'wtcouponpop'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'regisNewsletterMessage'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'enterEmail')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'enterEmail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter your email please!','js'=>1,'mod'=>'wtcouponpop'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'enterEmail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<div class="wt-show-popup <?php if ($_smarty_tpl->tpl_vars['cookies_time']->value>0) {?>open<?php } else { ?>close<?php }?>">
	<div class="wt-coupon-small">
		<div class="tab-image"></div>
		<div class="scissors-small"></div>
		<div class="dashes-d"></div>
		<div class="dashes-b"></div>
		<div class="share-coupon-small-wrapper"><a href="javascript: void(0)"><span><?php echo smartyTranslate(array('s'=>'Discount','mod'=>'wtcouponpop'),$_smarty_tpl);?>
</span></a></div>
	</div>
</div>
</div>
</div><?php }} ?>
