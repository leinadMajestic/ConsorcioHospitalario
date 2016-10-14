<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:17
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductmanu/views/templates/hook/wtproductmanu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6575697365800f9553cef18-78221165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8568ad9383fe7d4b1215a53b29b2f626f254a02' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductmanu/views/templates/hook/wtproductmanu.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6575697365800f9553cef18-78221165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manu_f' => 0,
    'manufacturer' => 0,
    'prod_manu' => 0,
    'number_line' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f9557fdb95_41595552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f9557fdb95_41595552')) {function content_5800f9557fdb95_41595552($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['number_line'] = new Smarty_variable(2, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['manu_f']->value)) {?>
<div class="wt-prod-manu clearfix">
<div class="container">
	<div class="wt-block-title">
	  <h3><?php echo smartyTranslate(array('s'=>'Brand ShowCase','mod'=>'wtproductmanu'),$_smarty_tpl);?>
</h3>
	 </div>
	<div class="out-prod-manu clearfix">
		<ul id="wt-prod-manu-tabs" class="nav nav-tabs clearfix">
			<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manu_f']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
?>	
				<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?> active<?php }?>">
					<a data-toggle="tab" class="tab_li" href="#manu_<?php echo intval($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer']);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['manufacturer']->value['name'],15,''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					</a>
				</li>
			<?php } ?>
		</ul>
		<div class="tab-content">
			<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manu_f']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
?>
				<div id="manu_<?php echo intval($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer']);?>
" class="tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?> active<?php }?>">
					<div class="manu-desc col-xs-12 col-sm-4">
						<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['description']!='') {?>
							<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['manufacturer']->value['description']);?>

						<?php } else { ?>
							<div class="cont-manu">
							<?php echo smartyTranslate(array('s'=>'Manufacturer Description','mod'=>'wtproductmanu'),$_smarty_tpl);?>

							</div>
						<?php }?>
					</div>
					<div class="manu-prod col-xs-12 col-sm-8">
						<div class="owl-prod-manu">
							<?php $_smarty_tpl->tpl_vars['prod_manu'] = new Smarty_variable($_smarty_tpl->tpl_vars['manufacturer']->value['product_list'], null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['prod_manu']->value&&count($_smarty_tpl->tpl_vars['prod_manu']->value)>0) {?>
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod_manu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
									<div class="product-container"  itemscope itemtype="https://schema.org/Product">
										<div class="product-image-container">
											<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
												<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image"/>
											</a>
										</div>
										<div class="product-content">
											<h5 class="product-name"  itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"  itemprop="image"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
											<p><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),75,'...'));?>
</p>
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
									</div>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
								</div>
								<?php }?>
							<?php } ?>
							<?php } else { ?>
								<p><?php echo smartyTranslate(array('s'=>'There no product','mod'=>'wtproductmanu'),$_smarty_tpl);?>
</p>
							<?php }?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		var owl = $(".owl-prod-manu");
		imagesLoaded(owl, function() {
			owl.owlCarousel({
				  loop: true,
					responsive: {
						0: { items: 1},
						464:{ items: 2, slideBy: 2},
						750:{ items: 2, slideBy: 2},
						974:{ items: 2, slideBy: 2},
						1170:{ items: 2, slideBy: 2}
						
					},
				  dots: false,
				  nav: true,
				  margin:30 
				  });
			});
		});
	</script>
</div>
</div>
<?php }?><?php }} ?>
