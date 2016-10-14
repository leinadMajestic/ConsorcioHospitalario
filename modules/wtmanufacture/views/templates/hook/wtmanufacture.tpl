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
{$number_line = 1}
{if isset($manufacs)}
<div class="wt-block-manu clearfix">
	<div class="out-manu">
		<div class="manu-content cleanfix">
			<div class="list_manu ">
				<div id="ul_manu">
				{foreach from=$manufacs item=manufacturer name=manufacturer_list}
					{if file_exists($ps_manu_img_dir|cat:$manufacturer.id_manufacturer|cat:'.jpg')}
					{if $smarty.foreach.manufacturer_list.iteration % $number_line == 1 || $number_line == 1}
					<div class="{if $smarty.foreach.manufacturer_list.first}first_item{elseif $smarty.foreach.manufacturer_list.last}last_item{/if}">
					{/if}
						<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$manufacturer.name|escape:'htmlall':'UTF-8'}">
						<img src="{$img_manu_dir|escape:'htmlall':'UTF-8'}{$manufacturer.id_manufacturer|escape:'htmlall':'UTF-8'}-m_scene_default.jpg" alt="{$manufacturer.name|escape:'htmlall':'UTF-8'}" /></a>
					{if $smarty.foreach.manufacturer_list.iteration % $number_line == 0 ||$smarty.foreach.manufacturer_list.last|| $number_line == 1}
					</div>
					{/if}
					{/if}
				{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(window).load(function(){
	var owl_manu = $("#ul_manu");
	imagesLoaded(owl_manu, function() {
		$("#ul_manu").owlCarousel({
		  loop: true,
			responsive: {
				0: { items: 2},
				464:{ items: 3, slideBy: 2},
				750:{ items: 4, slideBy: 2},
				974:{ items: 6, slideBy: 3},
				1170:{ items: 6, slideBy: 3}
			},
		  dots: false,
		  nav: true
		  });
		});
	});
</script>
{/if}