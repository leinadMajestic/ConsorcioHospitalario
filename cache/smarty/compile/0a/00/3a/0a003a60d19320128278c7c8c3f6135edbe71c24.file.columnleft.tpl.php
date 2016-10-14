<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:51:07
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtblog/views/templates/hook/columnleft.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1062551935800feeb46b9d0-73634991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a003a60d19320128278c7c8c3f6135edbe71c24' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtblog/views/templates/hook/columnleft.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1062551935800feeb46b9d0-73634991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800feeb516520_01317766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800feeb516520_01317766')) {function content_5800feeb516520_01317766($_smarty_tpl) {?>

<!-- Blog categories -->
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-categoryPost'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-post'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-tag'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-rss') {?>
		<div class="block blog-categories" id="blog_categories">
		<?php echo $_smarty_tpl->getSubTemplate ("./contents/blockcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	<?php }?>
<!-- /Blog categories -->
<!-- Lastest post -->
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-categoryPost'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-post'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-tag'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-rss') {?>
		<div class="block blog_lastest_posts" id="blog_lastest_posts_displayLeftColumn">
		<?php echo $_smarty_tpl->getSubTemplate ("./contents/blocklastestposts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	<?php }?>
<!-- /Lastest post -->
<!-- /Blog current comment -->
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-categoryPost'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-post'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-tag'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-rss') {?>
		<div class="block blog-comments" id="blog_comments">
		<?php echo $_smarty_tpl->getSubTemplate ("./contents/blockcomments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	<?php }?>
<!-- /Blog current comment -->
<!-- Blog tags -->
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-categoryPost'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-post'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-tag'||$_smarty_tpl->tpl_vars['page_name']->value=='module-wtblog-rss') {?>
		<div class="block tags_block" id="blog_tags">
		<?php echo $_smarty_tpl->getSubTemplate ("./contents/blocktags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	<?php }?>
<!-- /Blog tags -->
<?php }} ?>
