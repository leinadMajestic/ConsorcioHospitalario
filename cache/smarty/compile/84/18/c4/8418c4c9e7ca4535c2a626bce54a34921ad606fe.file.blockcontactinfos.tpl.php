<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:18
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13258373465800f95627d6d5-49599029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8418c4c9e7ca4535c2a626bce54a34921ad606fe' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/themes/wt_elmart/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1476139775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13258373465800f95627d6d5-49599029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f95635e389_45384296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f95635e389_45384296')) {function content_5800f95635e389_45384296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/Applications/MAMP/websites/consorcioHospitalario/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section class="footer-block col-xs-12 col-sm-4 col-md-3">
<div id="block_contact_infos">
	<div class="block_content">
        <h4><?php echo smartyTranslate(array('s'=>'Connect with Us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i>
					<span class="line-contact"><?php echo smartyTranslate(array('s'=>'Call us:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</span>
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i>
					<span class="line-contact"><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</span>
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
			 <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<i class="icon-map-marker"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
        </ul>
		
    </div>
</div>
<div id="wt-social-block">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter1'),$_smarty_tpl);?>

</div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
