<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:16
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15030790875800f954c17e81-20682767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad171a1f95ccca32dceea7f6539f59f4fca2b900' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtproductfilter/views/templates/hook/wtproductfilter_home.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15030790875800f954c17e81-20682767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_prod_fliter' => 0,
    'product_hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f954c723a3_25986711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f954c723a3_25986711')) {function content_5800f954c723a3_25986711($_smarty_tpl) {?>

<!-- Module Product From Category -->
<div class="wt-prod-filter clearfix">
<div class="container">
	<div class="block-content">
		<?php  $_smarty_tpl->tpl_vars['product_hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_prod_fliter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_hook']->key => $_smarty_tpl->tpl_vars['product_hook']->value) {
$_smarty_tpl->tpl_vars['product_hook']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='accordion') {?>
				<?php echo $_smarty_tpl->getSubTemplate ("./wtproductfilter_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='column') {?>
				<?php echo $_smarty_tpl->getSubTemplate ("./wtproductfilter_column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='tab') {?>
				<?php echo $_smarty_tpl->getSubTemplate ("./wtproductfilter_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['use_slider']==1) {?>
			<script type="text/javascript">
				$(document).ready(function() {
					$(".owl-prod-filter").owlCarousel({
						loop: true,
						slideSpeed: 1000,
						responsive: {
							0: { items: 1},
							464:{ items: 2},
							750:{ items: 3,slideBy:2},
							974:{ items: 4,slideBy:2},
							1170:{ items: 5,slideBy:3}
						},
						dots: false,
						nav: true,
						margin:30
					  });  
				});
			</script>
			<?php }?>
		<?php } ?>
	</div>
</div>
</div>
<!-- /Module Product From Category --><?php }} ?>
