<?php /*%%SmartyHeaderCode:135668483457fe39a55e5897-24908692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad171a1f95ccca32dceea7f6539f59f4fca2b900' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_home.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
    'd40e26e124cce8700471f48560ac1f9dc54fa55a' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_tab.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135668483457fe39a55e5897-24908692',
  'variables' => 
  array (
    'group_prod_fliter' => 0,
    'product_hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fe39a5d87523_74375822',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe39a5d87523_74375822')) {function content_57fe39a5d87523_74375822($_smarty_tpl) {?>
<!-- Module Product From Category -->
<div class="wt-prod-filter clearfix">
<div class="container">
	<div class="block-content">
															
<div class="type-tab">
	<ul id="wt-prod-filter-tabs" class="nav nav-tabs clearfix">
					<li class=" active"><a data-toggle="tab" href="#wt-feature-prod_tab" class="tab_li">Featured</a></li>
					<li class=""><a data-toggle="tab" href="#wt-bestseller-prod_tab" class="tab_li">Best Seller</a></li>
					<li class=""><a data-toggle="tab" href="#wt-specail-prod_tab" class="tab_li">Special</a></li>
			</ul>
	<div class="tab-content">
					<div id="wt-feature-prod_tab" class="wt-feature-prod tab-pane  active">
				<div class="owl-prod-filter">
								</div>
			</div>
					<div id="wt-bestseller-prod_tab" class="wt-bestseller-prod tab-pane ">
				<div class="owl-prod-filter">
														<div class="item ajax_block_product">
											<div class="product-container" itemscope itemtype="https://schema.org/Product">
							<div class="product-image-container">
								<a class="product_img_link" href="" title="" itemprop="url">
								<img src="http://localhost/consorcioHospitalario/-medium_default/.jpg" alt="" itemprop="image"/></a>
								<div class="wt-label">
								
																																	</div>
							
							<div class="functional-buttons clearfix">
							 <div class="button-hover">
																<a class="quick-view" href="" title="Quick view">
									<span>Quick view</span>
								</a>
																
															  </div>
								 
							</div>
							</div>
							<h5 class="product-name" itemprop="name"><a href="" title="" itemprop="url"></a></h5>
							
													</div>
										</div>
													</div>
			</div>
					<div id="wt-specail-prod_tab" class="wt-specail-prod tab-pane ">
				<div class="owl-prod-filter">
														<div class="item ajax_block_product">
											<div class="product-container" itemscope itemtype="https://schema.org/Product">
							<div class="product-image-container">
								<a class="product_img_link" href="" title="" itemprop="url">
								<img src="http://localhost/consorcioHospitalario/-medium_default/.jpg" alt="" itemprop="image"/></a>
								<div class="wt-label">
								
																																	</div>
							
							<div class="functional-buttons clearfix">
							 <div class="button-hover">
																<a class="quick-view" href="" title="Quick view">
									<span>Quick view</span>
								</a>
																
															  </div>
								 
							</div>
							</div>
							<h5 class="product-name" itemprop="name"><a href="" title="" itemprop="url"></a></h5>
							
													</div>
										</div>
													</div>
			</div>
			</div>
</div>
									<script type="text/javascript">
				$(document).ready(function() {
					$(".owl-prod-filter").owlCarousel({
						loop: true,
						slideSpeed: 1000,
						responsive: {
							0: { items: 1},
							464:{ items: 2},
							750:{ items: 3,slideBy:2},
							974:{ items: 4,slideBy:2},
							1170:{ items: 5,slideBy:3}
						},
						dots: false,
						nav: true,
						margin:30
					  });  
				});
			</script>
						</div>
</div>
</div>
<!-- /Module Product From Category --><?php }} ?>
