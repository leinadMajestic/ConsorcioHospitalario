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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($hook_mobile)}
<div class="input_search" data-role="fieldcontain">
	<form method="get" action="{$link->getPageLink('search', true)|escape:'html':'UTF-8'}" id="searchbox">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="{l s='Search entire store...' mod='wtblocksearch'}" value="{$search_query|escape:'html':'UTF-8'|stripslashes}" />
	</form>
</div>
{else}
<!-- Block search module TOP -->

<div id="search_block_top">
	<div class="search_hover"></div>
	<div class="drop_search">
		<form id="searchbox" method="get" action="{$link->getModuleLink('wtblocksearch', 'catesearch', array(), true)|escape:'html':'UTF-8'}" >
			<input type="hidden" name="fc" value="module" />
			<input type="hidden" name="module" value="wtblocksearch" />
			<input type="hidden" name="controller" value="catesearch" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<select id="search_category" name="search_category" class="form-control" style="width:182px;">
				<option value="all">{l s='All Categories' mod='wtblocksearch'}</option>
				{$search_category|escape:'quotes':'UTF-8'}
			</select>
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Search entire store...' mod='wtblocksearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<div id="wt_url_ajax_search" style="display:none">
			<input type="hidden" value="{$base_dir_ssl|escape:'html':'UTF-8'}modules/wtblocksearch/controller_ajax_search.php" class="url_ajax" />
			</div>
			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span>{l s='Search' mod='wtblocksearch'}</span>
			</button>
		</form>
	</div>
	<div id="result-ajax-search"></div>
</div>
{include file="./wtblocksearch-instantsearch.tpl"}
{/if}

<script type="text/javascript">
var limit_character = "<p class='limit'>{l s='Number of characters at least are 3' mod='wtblocksearch'}</p>";
</script>
<!-- /Block search module TOP -->
