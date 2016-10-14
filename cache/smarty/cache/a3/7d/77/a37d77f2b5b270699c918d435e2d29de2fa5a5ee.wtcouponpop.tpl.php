<?php /*%%SmartyHeaderCode:82816598357fe39a899bb45-99926434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '82816598357fe39a899bb45-99926434',
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
  'unifunc' => 'content_57fe39a8a68285_89121437',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe39a8a68285_89121437')) {function content_57fe39a8a68285_89121437($_smarty_tpl) {?><div class="banner-special">
	<div class="container">
<script type="text/javascript">
    var wt_coupon_url = "http://localhost/consorcioHospitalario/modules/wtcouponpop";
	var cookies_time = 864000;
</script>
<div id="overlay" style="display: none;" onclick="closeDialog(cookies_time)"></div>
<div class="wt-popup" style="background-image: url(http://localhost/consorcioHospitalario/modules/wtcouponpop/views/img/coupon-1-1.jpg);display: none;">
	
    <div class="inner">
		<div class="clearfix newsletter-content">
			<div class="g-banner-popup">
<h3>Enjoy a 10% offer</h3>
<div class="g-social"><span>Like us on</span>
<ul>
<li class="facebook"><a class="_blank" href="http://www.facebook.com/prestashop" target="_blank"> <span>Facebook</span> </a></li>
<li class="twitter"><a class="_blank" href="http://www.twitter.com/prestashop" target="_blank"> <span>Twitter</span> </a></li>
<li class="rss"><a class="_blank" href="http://www.prestashop.com/blog/en/" target="_blank"> <span>RSS</span> </a></li>
<li class="google-plus"><a class="_blank" href="https://www.google.com/+prestashop" rel="publisher" target="_blank"> <span>Google Plus</span> </a></li>
</ul>
</div>
<p>Join our mailing list and Get 10% OFF for any of our plans!</p>
</div>
		</div>
		<div class="newsletter-form">
			<div class="g-newsletter-form">
				<input class="input-email" id="input-email" type="text" name="email" size="18" placeholder="Enter your email..." value="" />                    
				<a onclick="regisNewsletter()" name="submitNewsletter" class="btn btn-default button">Subscribe</a>
			</div>
			
			
			<div class="g-check">                    
				<div class="checkbox">
					<input id="notshow" name="notshow" type="checkbox" value="1">
					Do not show this popup again
				</div>
			</div>
			<div id="regisNewsletterMessage"></div>
			<div class="wt-popup-close"><a href="javascript:void(0)" onclick="closeDialog(cookies_time)">
				<img src="http://localhost/consorcioHospitalario/modules/wtcouponpop/views/img/icon-close.png" alt="icon close"/> </a>
			</div>
					</div>
    </div>    
</div>


<div class="wt-show-popup open">
	<div class="wt-coupon-small">
		<div class="tab-image"></div>
		<div class="scissors-small"></div>
		<div class="dashes-d"></div>
		<div class="dashes-b"></div>
		<div class="share-coupon-small-wrapper"><a href="javascript: void(0)"><span>Discount</span></a></div>
	</div>
</div>
</div>
</div><?php }} ?>
