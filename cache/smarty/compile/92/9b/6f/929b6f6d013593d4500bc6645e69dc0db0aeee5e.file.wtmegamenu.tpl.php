<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:47:41
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtmegamenu/views/templates/hook/wtmegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4240958075800fe1d2bf802-23200729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929b6f6d013593d4500bc6645e69dc0db0aeee5e' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtmegamenu/views/templates/hook/wtmegamenu.tpl',
      1 => 1476339493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4240958075800fe1d2bf802-23200729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'icon_path' => 0,
    'menu_row' => 0,
    'menu_col' => 0,
    'sub_menu_item' => 0,
    'product' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800fe1dc3af26_99061286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800fe1dc3af26_99061286')) {function content_5800fe1dc3af26_99061286($_smarty_tpl) {?>

<!-- Module Megamenu-->
<div id="wt-menu-horizontal" class="wt-menu-horizontal">
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
	<div class="container">
	<div class="title-menu-mobile"><span><?php echo smartyTranslate(array('s'=>'Navigation','mod'=>'wtmegamenu'),$_smarty_tpl);?>
</span></div>
	<ul class="menu-content">
		<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['type'])&&$_smarty_tpl->tpl_vars['menu']->value['type']=='CAT'&&$_smarty_tpl->tpl_vars['menu']->value['dropdown']==1) {?>
				<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['menu']->value['sub_menu']);?>

			<?php } else { ?>
				<li class="level-1 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])>0) {?> parent<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon']==0&&$_smarty_tpl->tpl_vars['menu']->value['icon']!='') {?>
						<img class="img-icon" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_path']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""/>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon']==1&&$_smarty_tpl->tpl_vars['menu']->value['icon']!='') {?>
						<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
					<?php }?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle']!='') {?><span class="menu-subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['subtitle'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></a>
					<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])&&count($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])>0) {?>
						<span class="icon-drop-mobile"></span>
						<div class="wt-sub-menu menu-dropdown col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['width_sub_sm'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['width_sub'], ENT_QUOTES, 'UTF-8', true);?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['align_sub'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php  $_smarty_tpl->tpl_vars['menu_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sub_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_row']->key => $_smarty_tpl->tpl_vars['menu_row']->value) {
$_smarty_tpl->tpl_vars['menu_row']->_loop = true;
?>
								<div class="wt-menu-row row <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_row']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if (isset($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])&&count($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])>0) {?>
										<?php  $_smarty_tpl->tpl_vars['menu_col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_row']->value['list_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_col']->key => $_smarty_tpl->tpl_vars['menu_col']->value) {
$_smarty_tpl->tpl_vars['menu_col']->_loop = true;
?>
											<div class="wt-menu-col col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_col']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_col']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
">
												<?php if (count($_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item'])>0) {?>
													<ul class="ul-column">
													<?php  $_smarty_tpl->tpl_vars['sub_menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->key => $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->_loop = true;
?>
														<li class="menu-item <?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item']==1) {?> item-header<?php } else { ?> item-line<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==4) {?>
																<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
																<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
																<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_menu_item']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
																<div class="product-container clearfix">
																	<h5 class="product-name">
																		<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
																			<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],25,''), ENT_QUOTES, 'UTF-8', true);?>

																		</a>
																		
																	</h5>
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
																						<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*htmlspecialchars(100, ENT_QUOTES, 'UTF-8', true);?>
%</span>
																					<?php }?>
																				<?php }?>
																				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

																				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

																			<?php }?>
																		</div>
																	<?php }?>
																	
																	<div class="product-image-container">
																		<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
																			<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"  itemprop="image" />
																		</a>
																		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
																			<a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
																				<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale','mod'=>'wtmegamenu'),$_smarty_tpl);?>
</span>
																			</a>
																		<?php }?>
																	</div>
																</div>
																<?php } ?>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==3) {?>
																<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_menu_item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_menu_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
																<div class="html-block">
																	<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sub_menu_item']->value['text']);?>

																</div>
															<?php } else { ?>
																<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_menu_item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_menu_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
															<?php }?>
														</li>
													<?php } ?>
													</ul>
												<?php }?>
											</div>
										<?php } ?>
									<?php }?>
								</div>
							<?php } ?>
						</div>
					<?php }?>
				</li>
			<?php }?>
		<?php } ?>
	</ul>
	</div>
	
	<script type="text/javascript">
	text_more = "<?php echo smartyTranslate(array('s'=>'More','mod'=>'wtmegamenu'),$_smarty_tpl);?>
";
	numLiItem = $("#wt-menu-horizontal .menu-content li.level-1").length;
	nIpadHorizontal = 10;
	nIpadVertical = 8;
	htmlLiH = getHtmlHide(nIpadHorizontal,numLiItem);
	htmlLiV = getHtmlHide(nIpadVertical,numLiItem);
	htmlMenu=$("#wt-menu-horizontal .container").html();	 
	$(window).load(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
	});
	$(window).resize(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
	});
	</script>
</div>
<!-- /Module Megamenu --><?php }} ?>
