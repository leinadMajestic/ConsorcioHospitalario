<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:51:08
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12079978405800feec9a0247-25670892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '305bc67952c69fa12b142b97d3a46b64fe12462f' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/wtcustomhtml/views/templates/hook/wtcustomhtml_footer.tpl',
      1 => 1476139775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12079978405800feec9a0247-25670892',
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
  'unifunc' => 'content_5800feec9d2f22_92901661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800feec9d2f22_92901661')) {function content_5800feec9d2f22_92901661($_smarty_tpl) {?>

<!-- Static Block module -->
<section class="footer-block col-xs-12 col-sm-3">
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
	
	<?php }?>
<?php } ?>
</section>
<!-- /Static block module --><?php }} ?>
