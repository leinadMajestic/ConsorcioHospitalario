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

{capture name=path}{l s='Search' mod='wtblocksearch'}{/capture}

 <p class="heading-counter-search">
 {if isset($instant_search) && $instant_search}
        <a href="#" class="close">
            {l s='Return to the previous page' mod='wtblocksearch'}
        </a>
    {else}
        <span class="heading-counter">
            {if $nbProducts == 1}{l s='%d result has been found.' mod='wtblocksearch' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' mod='wtblocksearch' sprintf=$nbProducts|intval}{/if}
        </span>
    {/if}     
  </p>
<div class="div-heading">
<h3 
{if isset($instant_search) && $instant_search}id="instant_search_results"{/if} 
class="page-subheading {if !isset($instant_search) || (isset($instant_search) && !$instant_search)} product-listing{/if}">
    {l s='Search' mod='wtblocksearch'}&nbsp;
    {if $nbProducts > 0}
        <span class="lighter">
            "{if isset($search_query) && $search_query}{$search_query|escape:'html':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'html':'UTF-8'}{elseif $ref}{$ref|escape:'html':'UTF-8'}{/if}"
        </span>
    {/if}
    
</h3>
</div>
	<div class="contet_line"><p class="line"></p></div>
{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<p class="alert alert-warning">
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search' mod='wtblocksearch'}&nbsp;"{if isset($search_query)}{$search_query|escape:'html':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search' mod='wtblocksearch'}&nbsp;"{$search_tag|escape:'html':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword' mod='wtblocksearch'}
		{/if}
	</p>
{else}
	{if isset($instant_search) && $instant_search}
        <p class="alert alert-info">
            {if $nbProducts == 1}{l s='%d result has been found.' mod='wtblocksearch' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' mod='wtblocksearch' sprintf=$nbProducts|intval}{/if}
        </p>
    {/if}
	<div class="content_sortPagiBar clearfix">
            	<div class="sortPagiBar clearfix">
					{include file="$tpl_dir./product-compare.tpl"}
            		{include file="./product-sort.tpl"}
                	 {include file="./nbr-product-page.tpl"}
				</div>
                <div class="top-pagination-content clearfix">              	
				
                </div>
	</div>
	{include file="$tpl_dir./product-list.tpl" products=$search_products}
   <div class="content_sortPagiBar">
				<div class="bottom-pagination-content clearfix">
        	
            {if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
                {include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
            {/if}
           
        	
        </div>
    </div>
{/if}
