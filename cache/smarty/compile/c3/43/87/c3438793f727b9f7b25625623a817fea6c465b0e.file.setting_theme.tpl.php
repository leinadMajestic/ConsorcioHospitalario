<?php /* Smarty version Smarty-3.1.19, created on 2016-10-13 14:13:10
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtthemeconfigurator/views/templates/admin/setting_theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31548551757ffdcc6e64705-16813935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3438793f727b9f7b25625623a817fea6c465b0e' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtthemeconfigurator/views/templates/admin/setting_theme.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31548551757ffdcc6e64705-16813935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postAction' => 0,
    'options' => 0,
    'bg_colors' => 0,
    'name' => 0,
    'list' => 0,
    'bg_color' => 0,
    'fonts' => 0,
    'font_list' => 0,
    'font' => 0,
    'font_family' => 0,
    'submit_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ffdcc716cde7_95270780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ffdcc716cde7_95270780')) {function content_57ffdcc716cde7_95270780($_smarty_tpl) {?>

<form class="form-horizontal" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postAction']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="POST" enctype="multipart/form-data">
<div class="panel">
	<h3>
		<i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Settings style','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>

	</h3>
	<div class="form-group">
		<label for="box_mode" class="control-label col-lg-3 ">
			<?php echo smartyTranslate(array('s'=>'Box mode','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="input-group col-lg-2">
					<span class="switch prestashop-switch">
						<input type="radio" name="box_mode" id="box_mode_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['options']->value['box_mode'])&&$_smarty_tpl->tpl_vars['options']->value['box_mode']==1) {?> checked="checked" <?php }?>>
						<label for="box_mode_on">Yes</label>
						<input type="radio" name="box_mode" id="box_mode_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['options']->value['box_mode'])&&$_smarty_tpl->tpl_vars['options']->value['box_mode']==0) {?> checked="checked" <?php }?>>
						<label for="box_mode_off">No</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
		</div>
	</div>	
	<div class="form-group">
		<label for="cpanel" class="control-label col-lg-3 ">
			<?php echo smartyTranslate(array('s'=>'Show Demo Frontend','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="input-group col-lg-2">
					<span class="switch prestashop-switch">
						<input type="radio" name="cpanel" id="cpanel_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['options']->value['cpanel'])&&$_smarty_tpl->tpl_vars['options']->value['cpanel']==1) {?> checked="checked" <?php }?>>
						<label for="cpanel_on">Yes</label>
						<input type="radio" name="cpanel" id="cpanel_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['options']->value['cpanel'])&&$_smarty_tpl->tpl_vars['options']->value['cpanel']==0) {?> checked="checked" <?php }?>>
						<label for="cpanel_off">No</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
		</div>
	</div>
		
	<?php if ($_smarty_tpl->tpl_vars['bg_colors']->value!='') {?><h3><?php echo smartyTranslate(array('s'=>'Color','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>
</h3><?php }?>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bg_colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<?php $_smarty_tpl->tpl_vars['bg_color'] = new Smarty_variable(('color_').($_smarty_tpl->tpl_vars['name']->value), null, 0);?>		
	<div class="form-group">
	<label class="control-label col-lg-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	<div class="col-lg-9">
		<div class="col-lg-5">
			<div class="input-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				<input id="result_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
_color" type="text" name="color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value]!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['default_val'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="<?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value]!='') {?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['bg_color']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['default_val'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
				<span id="colobg_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
_color" class="input-group-btn" >
					<img src="<?php echo htmlspecialchars(@constant('_PS_ADMIN_IMG_'), ENT_QUOTES, 'UTF-8', true);?>
color.png" style="cursor:pointer; margin-left:5px" />
				</span>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['list']->value['note'])) {?><p class="help-block" style="font-size:11px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?>
			<script type="text/javascript">
				$(document).ready(function(){
					colorEvent("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
_color");
				});				
			</script>
		</div>
	</div>
	</div>
	<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['fonts']->value!='') {?><h3><?php echo smartyTranslate(array('s'=>'Font','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>
</h3><?php }?>
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
		<?php $_smarty_tpl->tpl_vars['font_family'] = new Smarty_variable(('font_family_').($_smarty_tpl->tpl_vars['name']->value), null, 0);?>		
		<div class="form-group">
		<label class="control-label col-lg-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</label>
		<div class="col-lg-9">
		<div class="col-lg-5">
			<select name="font_family_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="font_family_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" onchange="showResultChooseFont('font_family_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
','font_result_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
')">
				<?php  $_smarty_tpl->tpl_vars['font'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['font']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['font_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['font']->key => $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['font']->key;
?>				
					<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['font']->value);?>

				<?php } ?>
			</select>
			<?php if (isset($_smarty_tpl->tpl_vars['list']->value['note'])) {?><p class="help-block" style="font-size:11px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?>
			<script type="text/javascript">	
				$(document).ready(function() {
					<?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value]!='') {?>
						var f_m = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value], ENT_QUOTES, 'UTF-8', true);?>
';
						$("#font_family_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
").val(f_m);
					<?php } else { ?>
						$("#font_family_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
").val('');
					<?php }?>
				});
			</script>
		</div>
		<div class="col-lg-5"><span id="font_result_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value]!='') {?>style="font-family:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value]!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></div>		
		</div>				
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value])&&$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value]!='') {?>
		<script type="text/javascript">	
			$(document).ready(function() {
				$('head').append('<link id="link_' + '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value], ENT_QUOTES, 'UTF-8', true);?>
' + '" rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['font_family']->value], ENT_QUOTES, 'UTF-8', true);?>
' + '">');	
			});
		</script>
		<?php }?>
	<?php } ?>	
	<div class="panel-footer">
		<button type="submit" value="1" id="resetSetting" name="resetSetting" class="btn btn-default pull-left" onclick="this.form.submit();">
			<i class="process-icon-reset"></i> <?php echo smartyTranslate(array('s'=>'Reset','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>

		</button>
		<button type="submit" value="1" id="submit_color" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default pull-right" onclick="this.form.submit();">
			<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'wtthemeconfigurator'),$_smarty_tpl);?>

		</button>
	</div>
</div>
</form>
<script type="text/javascript">	
	function showBackground(classActive, name)
	{
		$(".fimage").hide();
		$("#image_" + classActive + "_" + name).show("slow");
	}
	function showResultChooseFont(id,id_result)
	{
		$('link#link_' + id).remove();
		if($("#" + id).val() != "")
			$('head').append('<link id="link_' + id + '" rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + $("#" + id).val() + '">');
		$("#" + id_result).html("" + $("#" + id).val() + "");
		$("#" + id_result).css("font-family","" + $("#" + id).val() + "");
	}
	function noteCustomer(thisForm)
	{
		 if (confirm("Do you really want to change the layout?") == true) {
		     thisForm.form.submit();
			return true;
		} else {
			return false;
		}
	}
</script>
<?php }} ?>
