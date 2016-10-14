<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:15
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/administrador/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9425782725800f9539b2185-97834293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059d8feb6d417731abd3fa1c3e3a4661326ec580' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/administrador/themes/default/template/content.tpl',
      1 => 1473192312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9425782725800f9539b2185-97834293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f9539cbaf3_84187253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f9539cbaf3_84187253')) {function content_5800f9539cbaf3_84187253($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
