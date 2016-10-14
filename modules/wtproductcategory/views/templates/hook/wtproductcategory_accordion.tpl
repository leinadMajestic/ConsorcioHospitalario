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

{$number_line = 2}
{$id_lang = Context::getContext()->language->id}
{foreach from=$group_cat_info item=cat_info name=g_cat_info}
<div class="out-content-prod">
<div class="container">
<div class="block-content clearfix">
	<div id="wt-prod-cat-{$cat_info.id_cat|intval}" class="row">
	       <div class="wt-block-title col-sm-12">
					<h3>
						<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">{$cat_info.cat_name|escape:'html':'UTF-8'}</a>
					</h3>
			</div>
		<div class="col-sm-12">
		<div class="block-content-info clearfix ">
		<div class="left-block col-sm-4 col-md-3">
			<div class="cat-banner" style="background-color:{$cat_info.cat_color|escape:'html':'UTF-8'}">
				{if $cat_info.cat_icon!='' }
				<div class="icon_cat">
				   <img src="{$icon_path|escape:'html':'UTF-8'}{$cat_info.cat_icon|escape:'html':'UTF-8'}" alt=""/>
				</div>
				{/if}
				
				{if $cat_info.cat_banner!='' }
				<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}"><img src="{$banner_path|escape:'html':'UTF-8'}{$cat_info.cat_banner|escape:'html':'UTF-8'}" alt=""/></a>
				{/if}
				<div class="out-abso">
				{if $cat_info.cat_desc!='' }
				<div class="cat-desc">
					{$cat_info.cat_desc|escape:'quotes':'UTF-8'}
				</div>
				{/if}
				<div class="cat-view-more">
					<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">{l s='View More' mod='wtproductcategory'}</a>
				</div>
				</div>
			</div>
		</div>
		<div class="right-block col-sm-8 col-md-9">
			<div class="sub-cat col-xs-12">
				<ul class="sub-cat-ul">
					{$i = 0}
					{foreach from = $cat_info.sub_cat item=sub_cat name=sub_cat_info}
						{$i = $i+1}
						{if $i <=7}
						<li class="item-{$i|intval}"><a href="{$link->getCategoryLink($sub_cat.id_category, $sub_cat.link_rewrite)|escape:'html':'UTF-8'}" title="{$sub_cat.name|escape:'html':'UTF-8'}">{$sub_cat.name|escape}</a></li>
						{/if}
					{/foreach}
				</ul>
			</div>
			<div class="wt-prod-special col-sm-6 col-md-4">
				{if isset($cat_info.product_list) && count($cat_info.product_list) > 0}
					{foreach from=$cat_info.product_list item=product name=product_list}
					{if $smarty.foreach.product_list.iteration == 1}
						<div class="item product-box ajax_block_product">
							<div class="product-container" itemscope itemtype="https://schema.org/Product">	
							<div class="product-image-container">
								<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:'html':'UTF-8'}" itemprop="url">
									<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:'html':'UTF-8'}" itemprop="image"/>
								</a>
							</div>
							<h5 class="product-name" itemprop="name"><a href="{$product.link|escape:'html':'UTF-8'}" itemprop="url">{$product.name|truncate:45:''|escape:'html':'UTF-8'}</a></h5>
							{hook h='displayProductAttributes' product=$product}
							{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
									<span class="price product-price" itemprop="price">
										{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
									</span>
									<meta itemprop="priceCurrency" content="{$currency->iso_code|escape:'html':'UTF-8'}" />
									{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
										{hook h="displayProductPriceBlock" product=$product type="old_price"}
										<span class="old-price product-price">
											{displayWtPrice p=$product.price_without_reduction}
										</span>
										{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
										{if $product.specific_prices.reduction_type == 'percentage'}
											<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100|escape:'html':'UTF-8'}%</span>
										{/if}
									{/if}
									{hook h="displayProductPriceBlock" product=$product type="price"}
									{hook h="displayProductPriceBlock" product=$product type="unit_price"}
								{/if}
							</div>
							{/if}
						 </div>
						</div>
					{/if}
					{/foreach}
				{/if}
			</div>
	
			<div class="product_list col-sm-6 col-md-8">
				<div class="owl-prod-cat">
					{if isset($cat_info.product_list) && count($cat_info.product_list) > 0}
					{foreach from=$cat_info.product_list item=product name=product_list}
						{if $smarty.foreach.product_list.iteration > 1}
							{if ($smarty.foreach.product_list.iteration-1) % $number_line == 1 || $number_line == 1}
							<div class="item product-box ajax_block_product">
							{/if}
							<div class="product-container" itemscope itemtype="https://schema.org/Product">	
								<div class="product-image-container">
									<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}" itemprop="url">
										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:'html':'UTF-8'}" itemprop="image"/>
									</a>
								</div>
								<h5 class="product-name" itemprop="name"><a href="{$product.link|escape:'html':'UTF-8'}" itemprop="url">{$product.name|truncate:15:''|escape:'html':'UTF-8'}</a></h5>
								{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
								<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
									{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
										<span class="price product-price" itemprop="price">
											{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
										</span>
										<meta itemprop="priceCurrency" content="{$currency->iso_code|escape:'html':'UTF-8'}" />
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											{hook h="displayProductPriceBlock" product=$product type="old_price"}
											<span class="old-price product-price">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
											{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
											{if $product.specific_prices.reduction_type == 'percentage'}
												<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100|escape:'html':'UTF-8'}%</span>
											{/if}
										{/if}
										{hook h="displayProductPriceBlock" product=$product type="price"}
										{hook h="displayProductPriceBlock" product=$product type="unit_price"}
									{/if}
								</div>
								{/if}
							 </div>
							{if ($smarty.foreach.product_list.iteration - 1) % $number_line == 0 ||$smarty.foreach.product_list.last || $number_line == 1}
							</div>
							{/if}
						{/if}
					{/foreach}
					{else}
						<div class="item product-box ajax_block_product">
							<p class="alert alert-warning">{l s='No product at this time' mod='wtproductcategory'}</p>
						</div>
					{/if}
				</div>
			</div>
		</div>
		</div>
		</div>
	</div>
</div>
</div>
</div>
{if $cat_info.show_img == 1 && isset($cat_info.id_image) && $cat_info.id_image > 0}
<div class="cat-img">
	<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">
		<img src="{$link->getCatImageLink($cat_info.link_rewrite, $cat_info.id_image, 'category_default')|escape:'html':'UTF-8'}"/>
	</a>
</div>
{/if}
{/foreach}