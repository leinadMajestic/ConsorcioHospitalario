<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:46:25
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/administrador/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16039685845800fdd1c2b4d7-74603151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a159689addbb14492b93d8d72d75fdf6d9b73254' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/administrador/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1473192312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16039685845800fdd1c2b4d7-74603151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800fdd1c3ce25_70194702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800fdd1c3ce25_70194702')) {function content_5800fdd1c3ce25_70194702($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
