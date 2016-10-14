<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:47:47
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15158151765800fe2359a400-19137734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280ea134e4f59b6bfec47f2b1b1030198640741d' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/footer.tpl',
      1 => 1476139774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15158151765800fe2359a400-19137734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800fe2367af61_07959297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800fe2367af61_07959297')) {function content_5800fe2367af61_07959297($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
				<div class="home-bottom">
					<div class="container"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBottomHome"),$_smarty_tpl);?>
</div>
				</div>
				<?php }?>
			</div><!-- .columns-container -->
			<div class="footer-section">
				 <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
				<div class="top-footer">
					<div class="container">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopFooter"),$_smarty_tpl);?>

					</div>
				</div>
				<?php }?>
				<div class="out-footer">
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
					<!-- Footer -->
					<div class="footer-container">
						<footer id="footer"  class="container">
							<div class="row">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							</div>
						</footer>
					</div><!-- #footer -->
				<?php }?>
				<div class="footer-copyright">
					<div class="container">
						<div class="block-coppy-right">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayCopyRight"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
				<div class="banner-special">
					<div class="container">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBannerSpecial"),$_smarty_tpl);?>

					</div>
				</div>
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
