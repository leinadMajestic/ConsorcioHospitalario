<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 05:03:27
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/build_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444677825800ad6fa5fd23-17063829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef755b1195f035ac6c2e5f2e0c8f472c5a1ba082' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/build_menu.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444677825800ad6fa5fd23-17063829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_wtverticalmegamenu' => 0,
    'info_rows' => 0,
    'info_row' => 0,
    'info_col' => 0,
    'sub_menu_item' => 0,
    'token' => 0,
    'url_base' => 0,
    'secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800ad6fbdd5d2_10773341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800ad6fbdd5d2_10773341')) {function content_5800ad6fbdd5d2_10773341($_smarty_tpl) {?>
<div class="panel">
	<h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Rows Of Menu','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&addRow=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div class="form-wrapper" id="menuRowContent">
		<?php  $_smarty_tpl->tpl_vars['info_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info_row']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['info_row']->key => $_smarty_tpl->tpl_vars['info_row']->value) {
$_smarty_tpl->tpl_vars['info_row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info_row']['iteration']++;
?>
			<div class="wt-menu-row container-fluid">
				<h4><?php echo smartyTranslate(array('s'=>'Row','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
 #<?php echo intval($_smarty_tpl->getVariable('smarty')->value['foreach']['info_row']['iteration']);?>

					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&delete_row=1"><i class="icon-trash"></i><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

					</a>
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
">
						<i class="icon-edit"></i><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

					</a>
					<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['info_row']->value['status']);?>

				</h4>
				<div class="wt-menu-column-content">
					<a class="btn btn-default btn-lg button-new-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&addCol=1"><i class="icon-plus-sign"></i><?php echo smartyTranslate(array('s'=>'Add Column','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>

					</a>
					<div class="wt-menu-column">
						<?php  $_smarty_tpl->tpl_vars['info_col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_row']->value['list_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_col']->key => $_smarty_tpl->tpl_vars['info_col']->value) {
$_smarty_tpl->tpl_vars['info_col']->_loop = true;
?>
							<div id="col_<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
" class="wt-column <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_col']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
">
								<h4>
								<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Delete Colum','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
" data-html="true">
									<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&id_column=<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
&delete_col=1">
										<i class="icon-trash"></i>
									</a>
									</span>
									<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
" data-html="true">
									<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&id_column=<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
">
										<i class="icon-edit"></i>
									</a>
									</span>
									<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Add new Item','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
" data-html="true">
									<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&id_column=<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
&addMenuItem=1">
										<i class="process-icon-new "></i>
									</a>
									</span>
								</h4>
								<ul class="block-items">
									<?php  $_smarty_tpl->tpl_vars['sub_menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_col']->value['list_menu_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->key => $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->_loop = true;
?>
										<li id="menuitem_<?php echo intval($_smarty_tpl->tpl_vars['sub_menu_item']->value['id_item']);?>
" class="<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item']==1) {?>item-header<?php } else { ?>item-line<?php }?>">
											<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_menu_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
											<div class="group-action">
												<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&id_column=<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
&id_item=<?php echo intval($_smarty_tpl->tpl_vars['sub_menu_item']->value['id_item']);?>
" title="<?php echo smartyTranslate(array('s'=>'Edit Item','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
 ">
													<i class="icon-edit"></i>
												</a>
												<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=wtverticalmegamenu&id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['id_wtverticalmegamenu']->value);?>
&id_row=<?php echo intval($_smarty_tpl->tpl_vars['info_row']->value['id_row']);?>
&id_column=<?php echo intval($_smarty_tpl->tpl_vars['info_col']->value['id_column']);?>
&id_item=<?php echo intval($_smarty_tpl->tpl_vars['sub_menu_item']->value['id_item']);?>
&delete_submenu_item=1" title="<?php echo smartyTranslate(array('s'=>'delete Item','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
 "><i class="icon-trash"></i>
												</a>
												<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sub_menu_item']->value['status']);?>

											</div>
											<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==3) {?>
											<div class="text-html">
												<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sub_menu_item']->value['text']);?>

											</div>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==4) {?>
												#<?php echo smartyTranslate(array('s'=>'Product ID','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
: <?php echo intval($_smarty_tpl->tpl_vars['sub_menu_item']->value['id_product']);?>

											<?php }?>
										</li>
									<?php } ?>
								</ul>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="panel-footer">
		<a href="index.php?controller=AdminModules&amp;configure=wtverticalmegamenu&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
		<i class="process-icon-back"></i><?php echo smartyTranslate(array('s'=>'Back to list','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</a>
	</div>
	<script type="text/javascript">
		$(function() {
			var $myMenus = $("ul.block-items");
			$myMenus.sortable({
				opacity: 0.6,
				cursor: "move",
				update: function() {
					var order = $(this).sortable("serialize") + "&action=updateMenusItemPosition";
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
			
			var $myColumns = $("div.wt-menu-column");
			$myColumns.sortable({
				opacity: 0.6,
				cursor: "move",
				update: function() {
					var order1 = $(this).sortable("serialize") + "&action=updateColumnsPosition";
					$.post("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_base']->value, ENT_QUOTES, 'UTF-8', true);?>
modules/wtverticalmegamenu/ajax_wtverticalmegamenu.php?secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8', true);?>
", order1);
					}
				});
			$myColumns.hover(function() {
				$(this).css("cursor","move");
				},
				function() {
				$(this).css("cursor","auto");
			});
		});
	</script>
</div><?php }} ?>
