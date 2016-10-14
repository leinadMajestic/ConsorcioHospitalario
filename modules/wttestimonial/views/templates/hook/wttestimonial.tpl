{*
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($banners)}
<!-- MODULE Block banner -->
<div class="wt-block-testimonial col-xs-12 col-sm-6">
   <div class="out-block-testimonial">
		<div class="bkg-testimonial">
			<img src="{$content_dir|escape:'html':'UTF-8'}modules/wttestimonial/views/img/bkg.jpg" alt="bkg testimonial"/>
		</div>
		<div class="items-aline">
			
			<div id="wt_testimonial_content" class="container-list testimonial-content">
			{foreach from=$banners item=banner name=banners}
				<div class="item">
					<div class="testimonial-text clearfix">
						{if isset($banner.text)}{$banner.text|escape:'quotes':'UTF-8'}{/if}
					</div>
					<div class="testimonial-author">
					  <span class="author">{$banner.title|escape:'html':'UTF-8'},</span>
					  <span class="job">{$banner.job|escape:'html':'UTF-8'}</span>
					</div>
					
				</div>
			{/foreach}
			</div>
		</div>
		</div>
</div>
<!-- /MODULE Block banner -->
{/if}