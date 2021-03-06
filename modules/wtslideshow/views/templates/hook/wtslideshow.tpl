{**
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Module HomeSlider -->
{$id_lang = Context::getContext()->language->id}
{if $slier_option_arr.fullwidth == 'true'}
	{assign var='width' value = '100%'}
<div id="full-slider-wrapper">
{else}
	{assign var='width' value = $slier_option_arr.width|cat:'px'}
<div id="slider-wrapper" class="col-xs-12 col-sm-8 col-md-9">
{/if}
{assign var='height' value = $slier_option_arr.height|cat:'px'}
	<div id="layerslider" style="width:{$width|escape:'html':'UTF-8'};height:{$height|escape:'html':'UTF-8'};">
		{foreach from=$wtslideshow_slides item=slide}
		{if $slide.transition3d!=''}
			{$transition2d = 'all'}
			{$transition3d = $slide.transition3d}
		{else}
			{$transition2d = $slide.transition2d}
			{$transition3d = ''}
		{/if}
		<div class="ls-slide" data-ls="slidedelay:{$slide.slidedelay|escape:'html':'UTF-8'};timeshift:{$slide.timeshift|escape:'html':'UTF-8'};transition2d:{$transition2d|escape:'html':'UTF-8'};transition3d:{$transition3d|escape:'html':'UTF-8'}">
			<img src="{$wtslideshow_path|escape:'html':'UTF-8'}views/img/sliderimages/{$slide.image|escape:'html':'UTF-8'}" class="ls-bg" title ="{$slide.title|escape:'html':'UTF-8'}" alt="{$slide.title|escape:'html':'UTF-8'}"/>
			<a href="{$slide.url|escape:'html':'UTF-8'}" class="ls-link" title="{$slide.title|escape:'html':'UTF-8'}"></a>
			{foreach from=$slide.caption item = captionItem}
				{if $captionItem['type']==3}
					{if $captionItem['params']['typev'] == 1}
						<div class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape:'html':'UTF-8'}px;" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}">
						<iframe src="http://player.vimeo.com/video/{$captionItem['capvideo'][$id_lang]|escape:'html':'UTF-8'}" width="{$captionItem['params']['widthv']|escape:'html':'UTF-8'}" height="{$captionItem['params']['heightv']|escape:'html':'UTF-8'}"></iframe>
						</div>
					{else}
						<div class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape:'html':'UTF-8'}px;" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}">
						<iframe width="{$captionItem['params']['widthv']|escape:'html':'UTF-8'}" height="{$captionItem['params']['heightv']|escape:'html':'UTF-8'}" src="//www.youtube.com/embed/{$captionItem['capvideo'][$id_lang]|escape:'html':'UTF-8'}" frameborder="0" allowfullscreen></iframe>
						</div>
					{/if}
					
				{elseif $captionItem['type']==2}
					{if isset($captionItem['link'][$id_lang]) && $captionItem['link'][$id_lang]!=''}
						<a href="{$captionItem['link'][$id_lang]|escape:'html':'UTF-8'}" target="_blank" class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape}px" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}">
							<img src="{$wtslideshow_path|escape:'html':'UTF-8'}views/img/layers/{$captionItem['capimage'][$id_lang]|escape:'html':'UTF-8'}"  alt="{$slide.title}"/>
						</a>
					{else}
						<img class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" src="{$wtslideshow_path|escape:'html':'UTF-8'}views/img/layers/{$captionItem['capimage'][$id_lang]|escape:'html':'UTF-8'}" class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape:'html':'UTF-8'}px" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}" alt="{$slide.title}"/>
					{/if}
				{else}
					{if isset($captionItem['link'][$id_lang]) && $captionItem['link'][$id_lang]!=''}
						<a href="{$captionItem['link'][$id_lang]|escape:'html':'UTF-8'}" target="_blank" class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape:'html':'UTF-8'}px" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}">
						{$captionItem['captext'][$id_lang]|escape:'quotes':'UTF-8'}
						</a>
					{else}
						<div class="ls-l {if isset($captionItem['params']['style'])}{$captionItem['params']['style']|escape:'html':'UTF-8'}{/if} {if isset($captionItem['params']['class'])}{$captionItem['params']['class']|escape:'html':'UTF-8'}{/if}" style="top:{$captionItem['params']['datay']|escape:'html':'UTF-8'}px; left:{$captionItem['params']['datax']|escape:'html':'UTF-8'}px" data-ls="{$captionItem['paramstr']|escape:'html':'UTF-8'}">
						{$captionItem['captext'][$id_lang]|escape:'quotes':'UTF-8'}
						</div>
					{/if}
				{/if}
			{/foreach}
		
			{if $slide.thumbnail}
				<img src="{$wtslideshow_path|escape:'html':'UTF-8'}views/img/thumbnails/{$slide.thumbnail|escape:'html':'UTF-8'}" class="ls-tn" alt="{$slide.title}"/>
			{else}
				<img src="{$wtslideshow_path|escape:'html':'UTF-8'}views/img/sliderimages/thumbnail_{$slide.image|escape:'html':'UTF-8'}" class="ls-tn" alt="{$slide.title}"/>
			{/if}
		</div>
		{/foreach}
	</div>
	<script type="text/javascript">
	$("#layerslider").layerSlider({
		responsive: {$slier_option_arr.responsive|escape:'html':'UTF-8'},
		responsiveUnder:{$slier_option_arr.responsiveUnder|escape:'html':'UTF-8'},
		layersContainer:{$slier_option_arr.layersContainer|escape:'html':'UTF-8'},
		autoStart:{$slier_option_arr.autoStart|escape:'html':'UTF-8'},
		pauseOnHover:{$slier_option_arr.pauseOnHover|escape:'html':'UTF-8'},
		firstSlide:{$slier_option_arr.firstSlide|escape:'html':'UTF-8'},
		animateFirstSlide:{$slier_option_arr.animateFirstSlide|escape:'html':'UTF-8'},
		forceLoopNum:{$slier_option_arr.forceLoopNum|escape:'html':'UTF-8'},
		towWaySlideshow:{$slier_option_arr.towWaySlideshow|escape:'html':'UTF-8'},
		randomSlideshow:{$slier_option_arr.randomSlideshow|escape:'html':'UTF-8'},
		skin:"{$slier_option_arr.skin|escape:'html':'UTF-8'}",
		loops:{$slier_option_arr.loops|escape:'html':'UTF-8'},
		skinsPath: "{$wtslideshow_path|escape:'html':'UTF-8'}{$slier_option_arr.skinsPath|escape:'html':'UTF-8'}",
		globalBGColor: "{$slier_option_arr.globalBGColor|escape:'html':'UTF-8'}",
		globalBGImage: {$slier_option_arr.globalBGImage|escape:'html':'UTF-8'},
		navPrevNext: {$slier_option_arr.navPrevNext|escape:'html':'UTF-8'},
		navStartStop: {$slier_option_arr.navStartStop|escape:'html':'UTF-8'},
		navButtons: {$slier_option_arr.navButtons|escape:'html':'UTF-8'},
		hoverPrevNext: {$slier_option_arr.hoverPrevNext|escape:'html':'UTF-8'},
		hoverBottomNav:{$slier_option_arr.hoverBottomNav|escape:'html':'UTF-8'},
		keybNav:{$slier_option_arr.keybNav|escape:'html':'UTF-8'},
		touchNav:{$slier_option_arr.touchNav|escape:'html':'UTF-8'},
		showBarTimer:{$slier_option_arr.showBarTimer|escape:'html':'UTF-8'},
		showCircleTimer: {$slier_option_arr.showCircleTimer|escape:'html':'UTF-8'},
		thumbnailNavigation: "{$slier_option_arr.thumbnailNavigation|escape:'html':'UTF-8'}",
		tnContainerWidth: "{$slier_option_arr.tnContainerWidth|escape:'html':'UTF-8'}",
		tnWidth: {$slier_option_arr.tnWidth|escape:'html':'UTF-8'},
		tnHeight: {$slier_option_arr.tnHeight|escape:'html':'UTF-8'},
		tnActiveOpacity: {$slier_option_arr.tnActiveOpacity|escape:'html':'UTF-8'},
		tnInactiveOpacity: {$slier_option_arr.tnInactiveOpacity|escape:'html':'UTF-8'},
		tnInactiveOpacity: {$slier_option_arr.tnInactiveOpacity|escape:'html':'UTF-8'},
		autoPlayVideos: {$slier_option_arr.autoPlayVideos|escape:'html':'UTF-8'},
		autoPauseSlideshow: "{$slier_option_arr.autoPauseSlideshow|escape:'html':'UTF-8'}",
		youtubePreview: "{$slier_option_arr.youtubePreview|escape:'html':'UTF-8'}",
		imgPreload: {$slier_option_arr.imgPreload|escape:'html':'UTF-8'},
		lazyLoad: {$slier_option_arr.lazyLoad|escape:'html':'UTF-8'},
		yourLogo: {if $slier_option_arr.yourLogo=='false'}{$slier_option_arr.yourLogo|escape:'html':'UTF-8'}{else}"{$slier_option_arr.yourLogo|escape:'html':'UTF-8'}"{/if},
		yourLogoStyle: "{$slier_option_arr.yourLogoStyle|escape:'html':'UTF-8'}",
		yourLogoLink: {if $slier_option_arr.yourLogoLink=='false'}{$slier_option_arr.yourLogoLink|escape}{else}"{$slier_option_arr.yourLogoLink|escape:'html':'UTF-8'}"{/if},
		yourLogoTarget: '{$slier_option_arr.yourLogoTarget|escape:'html':'UTF-8'}'
	});
	</script>
</div>
<!-- /Module HomeSlider -->