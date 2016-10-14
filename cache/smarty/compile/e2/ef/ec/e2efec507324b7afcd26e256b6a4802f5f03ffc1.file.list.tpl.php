<?php /* Smarty version Smarty-3.1.19, created on 2016-10-13 14:07:52
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtmegamenu/views/templates/admin/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111549821757ffdb888c1e36-06111096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2efec507324b7afcd26e256b6a4802f5f03ffc1' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtmegamenu/views/templates/admin/list.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111549821757ffdb888c1e36-06111096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'info_menus' => 0,
    'info_menu' => 0,
    'url_base' => 0,
    'secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ffdb8894d306_97243839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ffdb8894d306_97243839')) {function content_57ffdb8894d306_97243839($_smarty_tpl) {?>

<div class="panel">
	<h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Menu List','mod'=>'wtmegamenu'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtmegamenu&addMenu=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="menuContent">
		<div id="menus">
			<?php  $_smarty_tpl->tpl_vars['info_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_menu']->key => $_smarty_tpl->tpl_vars['info_menu']->value) {
$_smarty_tpl->tpl_vars['info_menu']->_loop = true;
?>
				<div id="menu_<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtmegamenu']);?>
" class="panel">
					<div class="row">
						<div class="col-md-2">
							<h4 class="pull-left">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_menu']->value['id_wtmegamenu'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
						</div>
						<div class="col-md-2">
							<h4 class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_menu']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
						</div>
						<div class="col-md-8">	
							<div class="btn-group-action pull-right">
								<?php if ($_smarty_tpl->tpl_vars['info_menu']->value['dropdown']==0||$_smarty_tpl->tpl_vars['info_menu']->value['type_link']==1) {?>
									<a class="btn btn-default"
										href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtmegamenu&id_wtmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtmegamenu']);?>
&buildMenu=1">
										<i class="icon-layer"></i>
										<?php echo smartyTranslate(array('s'=>'Build SubMenu','mod'=>'wtmegamenu'),$_smarty_tpl);?>

									</a>
								<?php }?>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtmegamenu&id_wtmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtmegamenu']);?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'wtmegamenu'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtmegamenu&delete_id_menu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtmegamenu']);?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'wtmegamenu'),$_smarty_tpl);?>

								</a>
								<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['info_menu']->value['status']);?>

							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		$(function() {
			var $myMenus = $("#menus");
			$myMenus.sortable({
				opacity: 0.6,
				cursor: "move",
				update: function() {
					var order = $(this).sortable("serialize") + "&action=updateMenusPosition";
					$.post("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_base']->value, ENT_QUOTES, 'UTF-8', true);?>
modules/wtmegamenu/ajax_wtmegamenu.php?secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8', true);?>
", order);
					}
				});
			$myMenus.hover(function() {
				$(this).css("cursor","move");
				},
				function() {
				$(this).css("cursor","auto");
			});
		});
	</script>
</div><?php }} ?>
