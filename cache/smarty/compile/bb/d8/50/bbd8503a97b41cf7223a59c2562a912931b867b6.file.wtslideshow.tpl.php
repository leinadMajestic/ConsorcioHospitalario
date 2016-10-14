<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 10:27:21
         compiled from "/Applications/MAMP/websites/consorcioHospitalario/modules/wtslideshow/views/templates/hook/wtslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2169134235800f95950b5c1-67888817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd8503a97b41cf7223a59c2562a912931b867b6' => 
    array (
      0 => '/Applications/MAMP/websites/consorcioHospitalario/modules/wtslideshow/views/templates/hook/wtslideshow.tpl',
      1 => 1476307998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169134235800f95950b5c1-67888817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slier_option_arr' => 0,
    'width' => 0,
    'height' => 0,
    'wtslideshow_slides' => 0,
    'slide' => 0,
    'transition2d' => 0,
    'transition3d' => 0,
    'wtslideshow_path' => 0,
    'captionItem' => 0,
    'id_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5800f959d7cbc9_77151801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f959d7cbc9_77151801')) {function content_5800f959d7cbc9_77151801($_smarty_tpl) {?>

<!-- Module HomeSlider -->
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['fullwidth']=='true') {?>
	<?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable('100%', null, 0);?>
<div id="full-slider-wrapper">
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['slier_option_arr']->value['width']).('px'), null, 0);?>
<div id="slider-wrapper" class="col-xs-12 col-sm-8 col-md-9">
<?php }?>
<?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable(($_smarty_tpl->tpl_vars['slier_option_arr']->value['height']).('px'), null, 0);?>
	<div id="layerslider" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true);?>
;">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wtslideshow_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['slide']->value['transition3d']!='') {?>
			<?php $_smarty_tpl->tpl_vars['transition2d'] = new Smarty_variable('all', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['transition3d'] = new Smarty_variable($_smarty_tpl->tpl_vars['slide']->value['transition3d'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['transition2d'] = new Smarty_variable($_smarty_tpl->tpl_vars['slide']->value['transition2d'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['transition3d'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="ls-slide" data-ls="slidedelay:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['slidedelay'], ENT_QUOTES, 'UTF-8', true);?>
;timeshift:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['timeshift'], ENT_QUOTES, 'UTF-8', true);?>
;transition2d:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transition2d']->value, ENT_QUOTES, 'UTF-8', true);?>
;transition3d:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transition3d']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/sliderimages/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" class="ls-bg" title ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"/>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="ls-link" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
			<?php  $_smarty_tpl->tpl_vars['captionItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['captionItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['caption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['captionItem']->key => $_smarty_tpl->tpl_vars['captionItem']->value) {
$_smarty_tpl->tpl_vars['captionItem']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['captionItem']->value['type']==3) {?>
					<?php if ($_smarty_tpl->tpl_vars['captionItem']->value['params']['typev']==1) {?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px;" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
">
						<iframe src="http://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['capvideo'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['widthv'], ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['heightv'], ENT_QUOTES, 'UTF-8', true);?>
"></iframe>
						</div>
					<?php } else { ?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px;" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
">
						<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['widthv'], ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['heightv'], ENT_QUOTES, 'UTF-8', true);?>
" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['capvideo'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" frameborder="0" allowfullscreen></iframe>
						</div>
					<?php }?>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['captionItem']->value['type']==2) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value])&&$_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value]!='') {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/layers/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['capimage'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
"/>
						</a>
					<?php } else { ?>
						<img class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/layers/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['capimage'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
"/>
					<?php }?>
				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value])&&$_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value]!='') {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['captionItem']->value['captext'][$_smarty_tpl->tpl_vars['id_lang']->value]);?>

						</a>
					<?php } else { ?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'], ENT_QUOTES, 'UTF-8', true);?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'], ENT_QUOTES, 'UTF-8', true);?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'], ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['captionItem']->value['captext'][$_smarty_tpl->tpl_vars['id_lang']->value]);?>

						</div>
					<?php }?>
				<?php }?>
			<?php } ?>
		
			<?php if ($_smarty_tpl->tpl_vars['slide']->value['thumbnail']) {?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/thumbnails/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['thumbnail'], ENT_QUOTES, 'UTF-8', true);?>
" class="ls-tn" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
"/>
			<?php } else { ?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/sliderimages/thumbnail_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" class="ls-tn" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
"/>
			<?php }?>
		</div>
		<?php } ?>
	</div>
	<script type="text/javascript">
	$("#layerslider").layerSlider({
		responsive: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['responsive'], ENT_QUOTES, 'UTF-8', true);?>
,
		responsiveUnder:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['responsiveUnder'], ENT_QUOTES, 'UTF-8', true);?>
,
		layersContainer:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['layersContainer'], ENT_QUOTES, 'UTF-8', true);?>
,
		autoStart:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoStart'], ENT_QUOTES, 'UTF-8', true);?>
,
		pauseOnHover:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['pauseOnHover'], ENT_QUOTES, 'UTF-8', true);?>
,
		firstSlide:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['firstSlide'], ENT_QUOTES, 'UTF-8', true);?>
,
		animateFirstSlide:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['animateFirstSlide'], ENT_QUOTES, 'UTF-8', true);?>
,
		forceLoopNum:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['forceLoopNum'], ENT_QUOTES, 'UTF-8', true);?>
,
		towWaySlideshow:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['towWaySlideshow'], ENT_QUOTES, 'UTF-8', true);?>
,
		randomSlideshow:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['randomSlideshow'], ENT_QUOTES, 'UTF-8', true);?>
,
		skin:"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['skin'], ENT_QUOTES, 'UTF-8', true);?>
",
		loops:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['loops'], ENT_QUOTES, 'UTF-8', true);?>
,
		skinsPath: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wtslideshow_path']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['skinsPath'], ENT_QUOTES, 'UTF-8', true);?>
",
		globalBGColor: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['globalBGColor'], ENT_QUOTES, 'UTF-8', true);?>
",
		globalBGImage: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['globalBGImage'], ENT_QUOTES, 'UTF-8', true);?>
,
		navPrevNext: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['navPrevNext'], ENT_QUOTES, 'UTF-8', true);?>
,
		navStartStop: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['navStartStop'], ENT_QUOTES, 'UTF-8', true);?>
,
		navButtons: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['navButtons'], ENT_QUOTES, 'UTF-8', true);?>
,
		hoverPrevNext: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['hoverPrevNext'], ENT_QUOTES, 'UTF-8', true);?>
,
		hoverBottomNav:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['hoverBottomNav'], ENT_QUOTES, 'UTF-8', true);?>
,
		keybNav:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['keybNav'], ENT_QUOTES, 'UTF-8', true);?>
,
		touchNav:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['touchNav'], ENT_QUOTES, 'UTF-8', true);?>
,
		showBarTimer:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['showBarTimer'], ENT_QUOTES, 'UTF-8', true);?>
,
		showCircleTimer: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['showCircleTimer'], ENT_QUOTES, 'UTF-8', true);?>
,
		thumbnailNavigation: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['thumbnailNavigation'], ENT_QUOTES, 'UTF-8', true);?>
",
		tnContainerWidth: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnContainerWidth'], ENT_QUOTES, 'UTF-8', true);?>
",
		tnWidth: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnWidth'], ENT_QUOTES, 'UTF-8', true);?>
,
		tnHeight: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnHeight'], ENT_QUOTES, 'UTF-8', true);?>
,
		tnActiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnActiveOpacity'], ENT_QUOTES, 'UTF-8', true);?>
,
		tnInactiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnInactiveOpacity'], ENT_QUOTES, 'UTF-8', true);?>
,
		tnInactiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnInactiveOpacity'], ENT_QUOTES, 'UTF-8', true);?>
,
		autoPlayVideos: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoPlayVideos'], ENT_QUOTES, 'UTF-8', true);?>
,
		autoPauseSlideshow: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoPauseSlideshow'], ENT_QUOTES, 'UTF-8', true);?>
",
		youtubePreview: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['youtubePreview'], ENT_QUOTES, 'UTF-8', true);?>
",
		imgPreload: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['imgPreload'], ENT_QUOTES, 'UTF-8', true);?>
,
		lazyLoad: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['lazyLoad'], ENT_QUOTES, 'UTF-8', true);?>
,
		yourLogo: <?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo']=='false') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>,
		yourLogoStyle: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoStyle'], ENT_QUOTES, 'UTF-8', true);?>
",
		yourLogoLink: <?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink']=='false') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>,
		yourLogoTarget: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoTarget'], ENT_QUOTES, 'UTF-8', true);?>
'
	});
	</script>
</div>
<!-- /Module HomeSlider --><?php }} ?>
