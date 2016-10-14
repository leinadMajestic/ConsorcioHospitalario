<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:51:08
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8867524725800feecf1aee3-46782489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f325c03a432d8107c53bf651fa897bb9864f25f' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockuserinfo/nav.tpl',
      1 => 1476139775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8867524725800feecf1aee3-46782489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800feed05e0b7_37785963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800feed05e0b7_37785963')) {function content_5800feed05e0b7_37785963($_smarty_tpl) {?><!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<div class="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('mywishlist',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="icon-account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Wish List'),$_smarty_tpl);?>
</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
