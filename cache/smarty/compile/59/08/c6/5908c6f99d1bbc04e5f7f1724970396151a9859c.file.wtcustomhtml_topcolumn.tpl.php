<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 11:00:01
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_topcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71325473858010101243676-75759278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5908c6f99d1bbc04e5f7f1724970396151a9859c' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_topcolumn.tpl',
      1 => 1476139775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71325473858010101243676-75759278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_list' => 0,
    'cookie' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58010101272694_29138973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58010101272694_29138973')) {function content_58010101272694_29138973($_smarty_tpl) {?>

<!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
		<div class="wt-top-column-block col-xs-12 col-md-3">
			<?php echo $_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

		</div>
	<?php }?>
<?php } ?>
<!-- /Static block module --><?php }} ?>
