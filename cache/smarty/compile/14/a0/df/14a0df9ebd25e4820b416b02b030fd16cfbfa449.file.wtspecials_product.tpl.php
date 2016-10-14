<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:59:54
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtspecials/views/templates/hook/wtspecials_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1449633079580100fa1fd139-42719003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a0df9ebd25e4820b416b02b030fd16cfbfa449' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtspecials/views/templates/hook/wtspecials_product.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1449633079580100fa1fd139-42719003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'wtconfig' => 0,
    'number_line' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'banner_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_580100fa4ae999_71905668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580100fa4ae999_71905668')) {function content_580100fa4ae999_71905668($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['number_line'] = new Smarty_variable(1, null, 0);?>
<div id="wt-special-products" class="wt-special-products">
	<div class="block-title deal-title">
		<h3><?php echo smartyTranslate(array('s'=>'Best Deal','mod'=>'wtspecials'),$_smarty_tpl);?>
</h3>
	</div>
	<div class="container">
		<div class="block-content row">	
				<div class="new-prod-content col-sm-12">
					<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&count($_smarty_tpl->tpl_vars['new_products']->value)>0) {?>
					<div class="special-prod-slider <?php if ($_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==0) {?> cs-no-slider<?php }?>">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['wtconfig']->value)&&(($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==1&&$_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==1)||$_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==0||$_smarty_tpl->tpl_vars['number_line']->value==1)) {?>
								<div class="item ajax_block_product<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?> first<?php }?>">
							<?php }?>	
								<div class="product-container">
								 <div class="out-product-image-container">
									<div class="product-image-container">
										<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title=""  itemprop="image" />
										</a>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCountDownProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'prev_id'=>'sp'),$_smarty_tpl);?>

									</div>
								</div>
								<div class="out-content">
									<h5 class="product-name">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),18,'');?>
</a>
									</h5>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

									
									<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
									<div class="content_price">
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
											<span class="price product-price">
												<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
											</span>
											<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

												<span class="old-price product-price">
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

												</span>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

												<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
													<span class="price-percent-reduction">-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'], ENT_QUOTES, 'UTF-8', true)*100;?>
%</span>
												<?php }?>
											<?php }?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

										<?php }?>
									</div>
									<?php }?>
								  </div>
								</div>
							<?php if (isset($_smarty_tpl->tpl_vars['wtconfig']->value)&&((($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==0)&&$_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==1)||$_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==0||$_smarty_tpl->tpl_vars['number_line']->value==1)) {?>
								</div>
							<?php }?>
							
						<?php } ?>
					</div>
					<?php } else { ?>
						<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No product at this time','mod'=>'wtspecials'),$_smarty_tpl);?>
</p>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['wtconfig']->value->used_slider)&&$_smarty_tpl->tpl_vars['wtconfig']->value->used_slider==1) {?>
						<script type="text/javascript">
							$(document).ready(function() {
								$("#product .special-prod-slider").owlCarousel({
									loop: true,
									slideSpeed: 100,
									responsive: {
										0: { items: 1},
										464:{ items: 1},
										750:{ items: 1},
										974:{ items: 1},
										1170:{ items: 1}
									},
									dots: false,
									nav: true
								  });
							});
						</script>
					<?php }?>
				</div>
			<?php if (isset($_smarty_tpl->tpl_vars['wtconfig']->value->banner)&&$_smarty_tpl->tpl_vars['wtconfig']->value->banner!='') {?>
			<div class="col-sm-12 new-banner-img">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_path']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtconfig']->value->banner, ENT_QUOTES, 'UTF-8', true);?>
" alt=""/>
			</div>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
