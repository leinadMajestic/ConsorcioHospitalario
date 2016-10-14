<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 04:13:30
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/menu_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19821953765800a1ba5ec106-40064987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0050401d1ea6f6793b932f1576634706e1639259' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtverticalmegamenu/views/templates/admin/menu_item.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19821953765800a1ba5ec106-40064987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'languages' => 0,
    'language' => 0,
    'id_language' => 0,
    'lang' => 0,
    'all_options' => 0,
    'image_baseurl' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800a1ba96b1b5_69927667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800a1ba96b1b5_69927667')) {function content_5800a1ba96b1b5_69927667($_smarty_tpl) {?>
<form id="module_form" class="defaultForm form-horizontal" action="index.php?controller=AdminModules&amp;configure=wtverticalmegamenu&amp;token=<?php echo htmlspecialchars(Tools::getAdminTokenLite('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" novalidate="">
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Menu Item','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</h3>
	<div class="form-wrapper" id="menuContent" >
		<div class="form-group wt-type-link">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Type Link','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<div class="radio wt-radio">
					<label><input type="radio" name="type_link" id="type_link_custom" value="1" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==1) {?>checked="checked" <?php }?>>Custom Link</label>
				</div>
				<div class="radio wt-radio">
					<label><input type="radio" name="type_link" id="type_link_ps" value="0" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==0) {?>checked="checked" <?php }?>>PrestaShop Link</label>
				</div>
			</div>
		</div>
		
		<div class="form-group wt-menu-title" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==0) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Title','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="translatable-field lang-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['id_language']->value) {?>style="display:none"<?php }?>>
					<?php }?>
					<div class="col-lg-10">
					<input type="text" class="title" id="title_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="title_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->title[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])])) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value->title[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])];?>
<?php } else { ?>menu title<?php }?>"/>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="col-lg-2">
							<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);javascript:changeLangInfor(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);" tabindex="-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
								<?php } ?>
							</ul>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						</div>
					<?php }?>
				<?php } ?>
			</div>
		</div>
		
		<div class="form-group wt-menu-link" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==0) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Link','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="translatable-field lang-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['id_language']->value) {?>style="display:none"<?php }?>>
					<?php }?>
					<div class="col-lg-10">
					<input type="text" id="link_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="link_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->link[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])])) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value->link[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])];?>
<?php } else { ?>#<?php }?>"/>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="col-lg-2">
							<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);javascript:changeLangInfor(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);" tabindex="-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
								<?php } ?>
							</ul>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						</div>
					<?php }?>
				<?php } ?>
			</div>
		</div>
		<div class="form-group ps_link" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==1) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'PrestaShop Link','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<select class="form-control fixed-width-lg" name="ps_link" id="ps_link">
					<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['all_options']->value);?>

				</select>
			</div>
			<script type="text/javascript">
				<?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==0) {?>
				$(document).ready(function(){
					<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->link[$_smarty_tpl->tpl_vars['id_language']->value])&&$_smarty_tpl->tpl_vars['menu']->value->link[$_smarty_tpl->tpl_vars['id_language']->value]!='') {?>
						var ps_link_val = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->link[$_smarty_tpl->tpl_vars['id_language']->value], ENT_QUOTES, 'UTF-8', true);?>
';
					<?php } else { ?>
						var ps_link_val = 'CAT3';
					<?php }?>
					$("#ps_link").val(ps_link_val);
				});
				<?php }?>
			</script>
		</div>
		
		<div class="form-group show_sub" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_link==1) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Show Sub Categories','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="dropdown" id="dropdown_on" value="1" <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value->dropdown)&&$_smarty_tpl->tpl_vars['menu']->value->dropdown==1)) {?>checked="checked"<?php }?>>
					<label for="dropdown_on">Yes</label>
					<input type="radio" name="dropdown" id="dropdown_off" value="0" <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value->dropdown)&&$_smarty_tpl->tpl_vars['menu']->value->dropdown==0)||!$_smarty_tpl->tpl_vars['menu']->value->dropdown) {?>checked="checked"<?php }?>>
					<label for="dropdown_off">No</label>
					<a class="slide-button btn"></a>
				</span>	
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Sub Title','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="translatable-field lang-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['id_language']->value) {?>style="display:none"<?php }?>>
					<?php }?>
					<div class="col-lg-10">
					<input type="text" class="subtitle" id="subtitle_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="subtitle_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['menu']->value->subtitle[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])]) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value->subtitle[intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])];?>
<?php }?>"/>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						<div class="col-lg-2">
							<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);javascript:changeLangInfor(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);" tabindex="-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
								<?php } ?>
							</ul>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
						</div>
					<?php }?>
				<?php } ?>
			</div>
		</div>
		
		<div class="form-group wt-type-icon">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Type Icon','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<div class="radio wt-radio">
					<label><input type="radio" name="type_icon" id="type_icon_fw" value="1" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_icon==1) {?>checked="checked"<?php }?>>Font-Awesome Icon</label>
				</div>
				<div class="radio wt-radio">
					<label><input type="radio" name="type_icon" id="type_icon_img" value="0" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_icon==0) {?>checked="checked"<?php }?>>Image Icon</label>
				</div>
			</div>
		</div>
		
		<div class="form-group wt-fw-icon" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_icon==0) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Font-Awesome Icon','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<input type="text" class="icon_font" id="icon_font" name="icon_font" value="<?php if ($_smarty_tpl->tpl_vars['menu']->value->icon&&$_smarty_tpl->tpl_vars['menu']->value->type_icon==1) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->icon, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
				<p><?php echo smartyTranslate(array('s'=>'Put class icon of Font-Awesome at :','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
 <a href="http://fortawesome.github.io/Font-Awesome/3.2.1/icons/">http://fortawesome.github.io/Font-Awesome/3.2.1/icons/.</a> ex: icon-sun</p>
			</div>
		</div>
		<div class="form-group wt-img-icon" <?php if ($_smarty_tpl->tpl_vars['menu']->value->type_icon==1) {?>style="display:none"<?php }?>>
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image Icon','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<div class="col-lg-6">
					<input id="icon_img" type="file" name="icon_img" class="hide">
					<div class="dummyfile input-group">
						<span class="input-group-addon"><i class="icon-file"></i></span>
						<input id="icon_img-name" type="text" name="filename" readonly="">
						<span class="input-group-btn">
							<button id="icon_img-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
								<i class="icon-folder-open"></i> Add file				</button>
										</span>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['menu']->value->type_icon==0&&isset($_smarty_tpl->tpl_vars['menu']->value->icon)&&$_smarty_tpl->tpl_vars['menu']->value->icon!='') {?>
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->icon, ENT_QUOTES, 'UTF-8', true);?>
" class="img-thumbnail"/>
						<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->id)) {?>
							<a href="index.php?controller=AdminModules&amp;configure=wtverticalmegamenu&amp;tab_module=front_office_features&amp;module_name=wtverticalmegamenu&amp;token=<?php echo htmlspecialchars(Tools::getAdminTokenLite('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;removeIcon=1&amp;id_wtverticalmegamenu=<?php echo intval($_smarty_tpl->tpl_vars['menu']->value->id);?>
" id="del_icon">Remove</a>
						<?php }?>
					<?php }?>
						<script type="text/javascript">
						$(document).ready(function(){
							$('#icon_img-selectbutton').click(function(e) {
								$('#icon_img').trigger('click');
							});

							$('#icon_img-name').click(function(e) {
								$('#icon_img').trigger('click');
							});

							$('#icon_img-name').on('dragenter', function(e) {
								e.stopPropagation();
								e.preventDefault();
							});

							$('#icon_img-name').on('dragover', function(e) {
								e.stopPropagation();
								e.preventDefault();
							});

							$('#icon_img-name').on('drop', function(e) {
								e.preventDefault();
								var files = e.originalEvent.dataTransfer.files;
								$('#icon_img')[0].files = files;
								$(this).val(files[0].name);
							});

							$('#icon_img').change(function(e) {
								if ($(this)[0].files !== undefined)
								{
									var files = $(this)[0].files;
									var name  = '';

									$.each(files, function(index, value) {
										name += value.name+', ';
									});

									$('#icon_img-name').val(name.slice(0, -2));
								}
								else // Internet Explorer 9 Compatibility
								{
									var name = $(this).val().split(/[\\/]/);
									$('#icon_img-name').val(name[name.length-1]);
								}
							});

							if (typeof icon_img_max_files !== 'undefined')
							{
								$('#icon_img').closest('form').on('submit', function(e) {
									if ($('#icon_img')[0].files.length > icon_img_max_files) {
										e.preventDefault();
										alert('You can upload a maximum of  files');
									}
								});
							}
						});
					</script>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Position Of SubMenu','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
		<div class="col-lg-9">
			<select class="form-control fixed-width-lg" name="align_sub" id="align_sub">
				<option value="wt-vm-sub-top"><?php echo smartyTranslate(array('s'=>'Top','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</option>
				<option value="wt-vm-sub-auto"><?php echo smartyTranslate(array('s'=>'Auto','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</option>
			</select>
			<script type="text/javascript">
				$(document).ready(function(){
					<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->align_sub)&&$_smarty_tpl->tpl_vars['menu']->value->align_sub!='') {?>
						var align_sub_val = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->align_sub, ENT_QUOTES, 'UTF-8', true);?>
';
					<?php } else { ?>
						var align_sub_val = 'wt-vm-sub-auto';
					<?php }?>
					$('#align_sub').val(align_sub_val);
				});
			</script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Width Of SubMenu','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
		<div class="col-lg-9">
			<select class="form-control fixed-width-lg" name="width_sub" id="width_sub">
				<option value="2">col-sm-2</option>
				<option value="3">col-sm-3</option>
				<option value="4">col-sm-4</option>
				<option value="5">col-sm-5</option>
				<option value="6">col-sm-6</option>
				<option value="7">col-sm-7</option>
				<option value="8">col-sm-8</option>
				<option value="9">col-sm-9</option>
				<option value="10">col-sm-10</option>
				<option value="11">col-sm-11</option>
				<option value="12">col-sm-12</option>
			</select>
			<script type="text/javascript">
				$(document).ready(function() {
					<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->width_sub)&&$_smarty_tpl->tpl_vars['menu']->value->width_sub!='') {?>
						var width_sub_val = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->width_sub, ENT_QUOTES, 'UTF-8', true);?>
';
					<?php } else { ?>
						var width_sub_val = '12';
					<?php }?>
					$("#width_sub").val(width_sub_val);
				});
			</script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Class','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
		<div class="col-lg-9">
			<input type="text" class="class" id="class" name="class" value="<?php if ($_smarty_tpl->tpl_vars['menu']->value->class) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->class, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Active','mod'=>'wtverticalmegamenu'),$_smarty_tpl);?>
</label>
		<div class="col-lg-9">
			<span class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="active" id="active_on" value="1" <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value->active)&&$_smarty_tpl->tpl_vars['menu']->value->active!=0)||!$_smarty_tpl->tpl_vars['menu']->value->active) {?>checked="checked"<?php }?>>
				<label for="active_on">Yes</label>
				<input type="radio" name="active" id="active_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['menu']->value->active)&&$_smarty_tpl->tpl_vars['menu']->value->active==0) {?>checked="checked"<?php }?>>
				<label for="active_off">No</label>
				<a class="slide-button btn"></a>
			</span>	
		</div>
	</div>
	
	<div class="panel-footer">
		<input type="hidden" name="id_wtverticalmegamenu" id="id_wtverticalmegamenu" value="<?php if (isset($_smarty_tpl->tpl_vars['menu']->value->id)) {?><?php echo intval($_smarty_tpl->tpl_vars['menu']->value->id);?>
<?php }?>"/>
		<button type="submit" value="1" id="module_form_submit_btn" name="submitMenuItem" class="btn btn-default pull-right">
			<i class="process-icon-save"></i> Save
		</button>
		<a href="index.php?controller=AdminModules&amp;configure=wtverticalmegamenu&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
		<i class="process-icon-back"></i> Back to list</a>
	</div>
	
</div>
</form><?php }} ?>
