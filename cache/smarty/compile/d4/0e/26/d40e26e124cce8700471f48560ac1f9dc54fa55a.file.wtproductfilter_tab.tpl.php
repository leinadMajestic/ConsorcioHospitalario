<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:59:58
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1151612153580100feb323e3-63107910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40e26e124cce8700471f48560ac1f9dc54fa55a' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_tab.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1151612153580100feb323e3-63107910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_groups' => 0,
    'product_group' => 0,
    'number_line' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'quick_view' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_580100ff08f0a7_81482212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580100ff08f0a7_81482212')) {function content_580100ff08f0a7_81482212($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['number_line'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
<div class="type-tab">
	<ul id="wt-prod-filter-tabs" class="nav nav-tabs clearfix">
		<?php  $_smarty_tpl->tpl_vars['product_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product_group']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->key => $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->_loop = true;
 $_smarty_tpl->tpl_vars['product_group']->index++;
 $_smarty_tpl->tpl_vars['product_group']->first = $_smarty_tpl->tpl_vars['product_group']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_group']['first'] = $_smarty_tpl->tpl_vars['product_group']->first;
?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_group']['first']) {?> active<?php }?>"><a data-toggle="tab" href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
_tab" class="tab_li"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php } ?>
	</ul>
	<div class="tab-content">
		<?php  $_smarty_tpl->tpl_vars['product_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product_group']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->key => $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->_loop = true;
 $_smarty_tpl->tpl_vars['product_group']->index++;
 $_smarty_tpl->tpl_vars['product_group']->first = $_smarty_tpl->tpl_vars['product_group']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_group']['first'] = $_smarty_tpl->tpl_vars['product_group']->first;
?>
			<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
_tab" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
 tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_group']['first']) {?> active<?php }?>">
				<div class="owl-prod-filter">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_group']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==1||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
					<div class="item ajax_block_product">
					<?php }?>
						<div class="product-container" itemscope itemtype="https://schema.org/Product">
							<div class="product-image-container">
								<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image"/></a>
								<div class="wt-label">
								
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
										<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
										<span class="sale-label">
											-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*htmlspecialchars(100, ENT_QUOTES, 'UTF-8', true);?>
%
										</span>
										<?php } else { ?>
											<span class="sale-label">
												-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['reduction']),$_smarty_tpl);?>

											</span>
										<?php }?>
									</a>
								<?php } else { ?>
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
									<a class="new-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'wtproductfilter'),$_smarty_tpl);?>
</span>
									</a>
									<?php }?>
								<?php }?>
								</div>
							
							<div class="functional-buttons clearfix">
							 <div class="button-hover">
								<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
								<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'wtproductfilter'),$_smarty_tpl);?>
">
									<span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'wtproductfilter'),$_smarty_tpl);?>
</span>
								</a>
								<?php }?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

								<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])||!$_smarty_tpl->tpl_vars['product']->value['customization_required'])&&($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
										<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
										<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,Smarty::$_smarty_vars['capture']['default'],false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'wtproductfilter'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
<?php }?>">
											<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'wtproductfilter'),$_smarty_tpl);?>
</span>
										</a>
									<?php } else { ?>
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<span><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'wtproductfilter'),$_smarty_tpl);?>
</span>
										</span>
									<?php }?>
								<?php }?>
							  </div>
								 
							</div>
							</div>
							<h5 class="product-name" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

							<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
								<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
										<span itemprop="price" class="price product-price">
											<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
										</span>
										<meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->iso_code, ENT_QUOTES, 'UTF-8', true);?>
" />
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

											<span class="old-price product-price">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

											</span>
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
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
					</div>
					<?php }?>
				<?php } ?>
				</div>
			</div>
		<?php } ?>
	</div>
</div><?php }} ?>
