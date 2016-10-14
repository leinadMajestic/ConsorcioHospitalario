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
<div id="wt_category_feature" class="wt_category_feature clearfix">
	{if isset($wt_categories) && $wt_categories|@count > 0}
		<div class="list_carousel responsive clearfix">
			<div class="wt-block-title">
					<h3>
						{l s='Hot Categories' mod='wtcategoryfeature'}
					</h3>
			</div>
			<div id="wt_cat_featured" class="product-list">
			{foreach from=$wt_categories item=item_category name=wt_categories}
			{assign var=category value=$item_category.category}
				 <div class="item {if $smarty.foreach.item_category.first|intval}first_item{elseif $smarty.foreach.item_category.last|intval}last_item{/if}">
					<div class="content">
						<div class="cat-infor">
							{if isset($wtconfig->showimg) && $wtconfig->showimg == 1}
							<div class="cat-img">
								<a href="{$link->getCategoryLink($category->id_category, $category->link_rewrite)|escape:'html':'UTF-8'}" title="{$category->name|escape:'html':'UTF-8'}">
									{if $category->id_image && $item_category.cat_thumb == 1}
										<img src="{$img_cat_dir|escape:'html':'UTF-8'}{$category->id_category|intval}_thumb.jpg" alt=""/>
									{else}
										<img class="replace-2x" src="{$img_cat_dir|escape:'html':'UTF-8'}{$lang_iso|escape:'html':'UTF-8'}-default-medium_default.jpg" alt=""/>
									{/if}
								</a>
								
							</div>
							{/if}
							<h4 class="title">
								<a href="{$link->getCategoryLink($category->id_category, $category->link_rewrite)|escape:'html':'UTF-8'}">
									{$category->name|escape:'html':'UTF-8'}
								</a>
							</h4>	
						</div>
						{if count($item_category.sub_cat > 0) && isset($wtconfig->showsub) && $wtconfig->showsub == 1}
						<div class="sub-cat">	
							<ul>
							{if isset($wtconfig->numbersub)}
								{$nb_sub = $wtconfig->numbersub}
							{else}
								{$nb_sub = 4}
							{/if}
							{$i = 0}
							{foreach from = $item_category.sub_cat item=sub_cat name=sub_cat_info}
								{$i = $i+1}
								{if $i <= $nb_sub}
								<li>
									<a href="{$link->getCategoryLink($sub_cat.id_category, $sub_cat.link_rewrite)|escape:'html':'UTF-8'}" title="{$sub_cat.name|escape:'html':'UTF-8'}">{$sub_cat.name|escape}</a>
								</li>
								{/if}
							{/foreach}
							</ul>
							
						</div>
						{/if}
					</div>
				 </div>
			 {/foreach}
			 </div>
		</div>
	{else}
		<p class="alert alert-warning">{l s='There is no category' mod='wtcategoryfeature'}</p>
	{/if}
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#wt_cat_featured").owlCarousel({
				responsive: {
					0: { items: 1},
					464:{ items: 2},
					750:{ items: 3},
					974:{ items: 4},
					1170:{ items: 5}
				},
			  dots: false,
			  nav: true,
			  loop:true,
			  margin:30
			});
		});
	</script>
</div>