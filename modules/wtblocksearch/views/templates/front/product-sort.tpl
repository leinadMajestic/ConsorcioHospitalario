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
{if isset($orderby) AND isset($orderway)}
{*}
<ul class="display hidden-xs">
	<li class="display-title">{l s='View as:' mod='wtblocksearch'}</li>
    <li class="view_as_grid"><a rel="nofollow" href="#" title="{l s='Grid' mod='wtblocksearch'}"><i class="icon-th-large"></i>{l s='Grid' mod='wtblocksearch'}</a></li>
    <li class="view_as_list"><a rel="nofollow" href="#" title="{l s='List' mod='wtblocksearch'}"><i class="icon-th-list"></i>{l s='List' mod='wtblocksearch'}</a></li>
</ul>
{*}
{* On 1.5 the var request is setted on the front controller. The next lines assure the retrocompatibility with some modules *}
{if !isset($request)}
	<!-- Sort products -->
	{if isset($smarty.get.id_category) && $smarty.get.id_category}
		{assign var='request' value=$link->getPaginationLink('category', $category, false, true)}
	{elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer}
		{assign var='request' value=$link->getPaginationLink('manufacturer', $manufacturer, false, true)}
	{elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier}
		{assign var='request' value=$link->getPaginationLink('supplier', $supplier, false, true)}
	{else}
		{assign var='request' value=$link->getPaginationLink(false, false, false, true)}
	{/if}
{/if}
<form id="productsSortForm" name="productsSortForm" method="get" action="{$link->getModuleLink('wtblocksearch', 'catesearch', array(), true)|escape:'html':'UTF-8'}" class="productsSortForm">
    <input type="hidden" id="sort-orderby" name="orderby" value="{$orderby|escape:'html':'UTF-8'}" />
    <input type="hidden" id="sort-orderway" name="orderway" value="{$orderWay|escape:'html':'UTF-8'}" />
    <input type="hidden" name="n" value="{$nbn|escape:'html':'UTF-8'}" />
	<input type="hidden" name="module" value="wtblocksearch" />
	<input type="hidden" name="controller" value="catesearch" />
	<input type="hidden" name="fc" value="module" />
	
	<div class="select selector1">
        {if isset($search_query) AND $search_query}
			<input type="hidden" name="search_query" value="{$search_query|escape:'html':'UTF-8'}" />
		{/if}		
		<select id="selectProductSort{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="selectProductSort form-control">     
			<option value="{$orderbydefault|escape:'html':'UTF-8'}:{$orderwaydefault|escape:'html':'UTF-8'}" {if $orderby eq $orderbydefault}selected="selected"{/if}>{l s='Sort by' mod='wtblocksearch'}</option>
			{if !$PS_CATALOG_MODE}
				<option value="price:asc" {if $orderby eq 'price' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='Price: Lowest first' mod='wtblocksearch'}</option>
				<option value="price:desc" {if $orderby eq 'price' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='Price: Highest first' mod='wtblocksearch'}</option>
			{/if}
			<option value="name:asc" {if $orderby eq 'name' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='Product Name: A to Z' mod='wtblocksearch'}</option>
			<option value="name:desc" {if $orderby eq 'name' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='Product Name: Z to A' mod='wtblocksearch'}</option>
			{if $PS_STOCK_MANAGEMENT && !$PS_CATALOG_MODE}
				<option value="quantity:desc" {if $orderby eq 'quantity' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='In stock' mod='wtblocksearch'}</option>
			{/if}
			<option value="reference:asc" {if $orderby eq 'reference' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='Reference: Lowest first' mod='wtblocksearch'}</option>
			<option value="reference:desc" {if $orderby eq 'reference' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='Reference: Highest first' mod='wtblocksearch'}</option>
		</select>
	</div>
</form>
<!-- /Sort products -->
	{if !isset($paginationId) || $paginationId == ''}
		{addJsDef request=$request}
	{/if}
{/if}
{literal}
<script type="text/javascript">
    $(function($){
    	$(document).on('change','.selectProductSort',function(){
    	   var splitData = $(this).val().split(':');
           $("#sort-orderby").val(splitData[0]);
           $("#sort-orderway").val(splitData[1]);
           $( "#productsSortForm").submit();
    	});
    });
</script>
{/literal}
