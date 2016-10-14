<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 04:45:53
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18445977015800a951d41c28-47228396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001b5471843f65f8f3b690c855743c3593e89db6' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/list.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18445977015800a951d41c28-47228396',
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
  'unifunc' => 'content_5800a951de9dd7_84072569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800a951de9dd7_84072569')) {function content_5800a951de9dd7_84072569($_smarty_tpl) {?>

<div class="panel">
	<h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Menu List','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&addMenu=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="menuContent">
		<div id="vmenus">
			<?php  $_smarty_tpl->tpl_vars['info_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_menu']->key => $_smarty_tpl->tpl_vars['info_menu']->value) {
$_smarty_tpl->tpl_vars['info_menu']->_loop = true;
?>
				<div id="vmenu_<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtverticalmegamenu']);?>
" class="panel">
					<div class="row">
						<div class="col-md-2">
								<h4 class="pull-left">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_menu']->value['id_wtverticalmegamenu'], ENT_QUOTES, 'UTF-8', true);?>
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
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtverticalmegamenu']);?>
&buildMenu=1">
										<i class="icon-layer"></i>
										<?php echo smartyTranslate(array('s'=>'Build SubMenu','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

									</a>
								<?php }?>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtverticalmegamenu']);?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&delete_id_menu=<?php echo intval($_smarty_tpl->tpl_vars['info_menu']->value['id_wtverticalmegamenu']);?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

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
			var $myMenus = $("#vmenus");
			$myMenus.sortable({
				opacity: 0.6,
				cursor: "move",
				update: function(){
					var order = $(this).sortable("serialize") + "&action=updateVMenusPosition";
					$.post("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_base']->value, ENT_QUOTES, 'UTF-8', true);?>
modules/wtverticalmegamenu/ajax_wtverticalmegamenu.php?secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8', true);?>
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
