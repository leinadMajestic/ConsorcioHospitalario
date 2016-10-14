<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:51:07
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16036340855800feeb531ba2-73233500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe0cdb33dfe5f3e3133ad3ac84a12c4e66cd223' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockadvertising/blockadvertising.tpl',
      1 => 1476139775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16036340855800feeb531ba2-73233500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800feeb54bb32_72716515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800feeb54bb32_72716515')) {function content_5800feeb54bb32_72716515($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>
