<?php /*%%SmartyHeaderCode:70136909557fe3842233417-39869900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929b6f6d013593d4500bc6645e69dc0db0aeee5e' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtmegamenu/views/templates/hook/wtmegamenu.tpl',
      1 => 1476140027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70136909557fe3842233417-39869900',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fe39a55666a9_26146492',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe39a55666a9_26146492')) {function content_57fe39a55666a9_26146492($_smarty_tpl) {?>
<!-- Module Megamenu-->
<div id="wt-menu-horizontal" class="wt-menu-horizontal">
	<div class="container">
	<div class="title-menu-mobile"><span>Navigation</span></div>
	<ul class="menu-content">
									<li class="level-1 ">
										<a href="http://localhost/consorcioHospitalario/"><span>Home</span></a>
									</li>
												<li class="level-1 ">
										<a href="http://localhost/consorcioHospitalario/nuevos-productos"><span>Productos nuevos</span></a>
									</li>
												<li class="level-1 ">
										<a href="http://localhost/consorcioHospitalario/mas-vendido"><span>Lo más vendido</span></a>
									</li>
												<li class="level-1 ">
										<a href="http://localhost/consorcioHospitalario/content/4-sobre-nosotros"><span>Sobre nosotros</span></a>
									</li>
												<li class="level-1 ">
										<a href="index.php?fc=module&amp;module=wtblog&amp;controller=categoryPost&amp;mainlink=wtblog"><span>Blog</span></a>
									</li>
						</ul>
	</div>
	
	<script type="text/javascript">
	text_more = "More";
	numLiItem = $("#wt-menu-horizontal .menu-content li.level-1").length;
	nIpadHorizontal = 10;
	nIpadVertical = 8;
	htmlLiH = getHtmlHide(nIpadHorizontal,numLiItem);
	htmlLiV = getHtmlHide(nIpadVertical,numLiItem);
	htmlMenu=$("#wt-menu-horizontal .container").html();	 
	$(window).load(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
	});
	$(window).resize(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
	});
	</script>
</div>
<!-- /Module Megamenu --><?php }} ?>
