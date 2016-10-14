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
{$number_line = 2}
{if isset($manu_f)}
<div class="wt-prod-manu clearfix">
<div class="container">
	<div class="wt-block-title">
	  <h3>{l s='Brand ShowCase' mod='wtproductmanu'}</h3>
	 </div>
	<div class="out-prod-manu clearfix">
		<ul id="wt-prod-manu-tabs" class="nav nav-tabs clearfix">
			{foreach from=$manu_f item=manufacturer name=manufacturer_list}	
				<li class="{if $smarty.foreach.manufacturer_list.first} active{/if}">
					<a data-toggle="tab" class="tab_li" href="#manu_{$manufacturer.id_manufacturer|intval}" title="{$manufacturer.name|escape:'htmlall':'UTF-8'}">
					{$manufacturer.name|truncate:15:''|escape:'htmlall':'UTF-8'}
					</a>
				</li>
			{/foreach}
		</ul>
		<div class="tab-content">
			{foreach from=$manu_f item=manufacturer name=manufacturer_list}
				<div id="manu_{$manufacturer.id_manufacturer|intval}" class="tab-pane {if $smarty.foreach.manufacturer_list.first} active{/if}">
					<div class="manu-desc col-xs-12 col-sm-4">
						{if $manufacturer.description !=''}
							{$manufacturer.description|escape:'quotes':'UTF-8'}
						{else}
							<div class="cont-manu">
							{l s='Manufacturer Description' mod='wtproductmanu'}
							</div>
						{/if}
					</div>
					<div class="manu-prod col-xs-12 col-sm-8">
						<div class="owl-prod-manu">
							{$prod_manu = $manufacturer.product_list}
							{if $prod_manu && count($prod_manu) > 0}
							{foreach from=$prod_manu item=product name=product_list}
								{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
								<div class="item ajax_block_product">
								{/if}
									<div class="product-container"  itemscope itemtype="https://schema.org/Product">
										<div class="product-image-container">
											<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}" itemprop="url">
												<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:html:'UTF-8'}" itemprop="image"/>
											</a>
										</div>
										<div class="product-content">
											<h5 class="product-name"  itemprop="name"><a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}"  itemprop="image">{$product.name|escape:'html':'UTF-8'}</a></h5>
											<p>{$product.description_short|strip_tags|truncate:75:'...'|escape:'quotes':'UTF-8'}</p>
											{if (!$PS_CATALOG_MODE && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
												<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
													{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
														<span itemprop="price" class="price product-price">
															{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
														</span>
														<meta itemprop="priceCurrency" content="{$currency->iso_code|escape:'html':'UTF-8'}" />
														{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
															{hook h="displayProductPriceBlock" product=$product type="old_price"}
															<span class="old-price product-price">
																{displayWtPrice p=$product.price_without_reduction}
															</span>
															{if $product.specific_prices.reduction_type == 'percentage'}
																<span class="price-percent-reduction">-{$product.specific_prices.reduction|escape:'html':'UTF-8' * 100}%</span>
															{/if}
														{/if}
														{hook h="displayProductPriceBlock" product=$product type="price"}
														{hook h="displayProductPriceBlock" product=$product type="unit_price"}
													{/if}
												</div>
											{/if}
										</div>
									</div>
								{if $smarty.foreach.product_list.iteration % $number_line == 0 ||$smarty.foreach.product_list.last || $number_line == 1}
								</div>
								{/if}
							{/foreach}
							{else}
								<p>{l s='There no product' mod='wtproductmanu'}</p>
							{/if}
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		var owl = $(".owl-prod-manu");
		imagesLoaded(owl, function() {
			owl.owlCarousel({
				  loop: true,
					responsive: {
						0: { items: 1},
						464:{ items: 2, slideBy: 2},
						750:{ items: 2, slideBy: 2},
						974:{ items: 2, slideBy: 2},
						1170:{ items: 2, slideBy: 2}
						
					},
				  dots: false,
				  nav: true,
				  margin:30 
				  });
			});
		});
	</script>
</div>
</div>
{/if}