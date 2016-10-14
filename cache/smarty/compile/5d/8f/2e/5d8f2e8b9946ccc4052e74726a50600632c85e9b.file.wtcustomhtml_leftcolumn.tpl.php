<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:51:07
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9712913015800feeb571ca4-56266392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d8f2e8b9946ccc4052e74726a50600632c85e9b' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_leftcolumn.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9712913015800feeb571ca4-56266392',
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
  'unifunc' => 'content_5800feeb5a9346_45316314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800feeb5a9346_45316314')) {function content_5800feeb5a9346_45316314($_smarty_tpl) {?>

<!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
		<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang]);?>

	<?php }?>
<?php } ?>

<!-- /Static block module --><?php }} ?>
