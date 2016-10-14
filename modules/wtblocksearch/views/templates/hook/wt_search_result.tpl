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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="content-ajax-search">
<div class="search-title">
	{l s='The result search for ' mod='wtblocksearch'} "{$query|escape:'html':'UTF-8'}"

</div>
<ul class="items-list">
{if $searchResults}
	{foreach from=$searchResults item=product key=key}
		<li class="item col_grid_5_2">
			<div class="image">
				<a href="{$product.link|escape:'html':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">						
						<img src="{$link->getImageLink($product.link_rewrite,$product.id_image ,'small_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" />					
				</a>
					{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
									{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<p class="sale-bkg animated" href="{$product.link|escape:'html':'UTF-8'}">
												<span class="sale">
												{if $product.specific_prices && $product.specific_prices.reduction == 'percentage'}
												-{$product.specific_prices.reduction|escape:'quotes':'UTF-8' * 100}%
												{else}
												-{convertPrice price=$product.price_without_reduction-$product.price|floatval}
												{/if}
												</span>
											</p>
									{/if}
									{/if}
			</div>	
			<h5 class="product-name">
				<a class="product-name" href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
					{$product.name|escape:'html':'UTF-8'}
				</a>
			</h5>
				<div class="review clearfix">
										{hook h='displayProductListReviews' product=$product}
										</div>
										
			{hook h='displayProductAttributes' product=$product}
		
		
			{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
									<div class="content_price">
									{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
												<span class="old-price">{convertPrice price=$product.price_without_reduction}</span>
										{/if}
												<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
											
									{/if}
									</div>
									{/if}
									
			
			
		</li>
		
	{/foreach}
	
	{else}
	<p class="noresult">{l s='No found any item!' mod='wtblocksearch'}</p>
{/if}
</ul>
{if $search_Total > 10}
<p class="title_showall">
<a href="#" onclick="Show_All_Search();return false;">
	<span>{l s='show alls' mod='wtblocksearch'}</span>
	</a>
</p>
{/if}
</div>
