<?php
/**
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
*/

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');
include_once(dirname(__FILE__).'/wtblocksearch.php');
$livesearch  = new wtblocksearch();
if (empty($_REQUEST['queryString']))
	$query = '';
else
{
	$query = Tools::replaceAccentedChars($_REQUEST['queryString']);
	$id_cat = Tools::replaceAccentedChars($_REQUEST['id_Cat']);
}

$searchResults = $livesearch->LiveSearchProduct($id_cat, Context::getContext()->language->id, $query);
if ($searchResults['total'] > 0)
{
	Context::getContext()->smarty->assign(array(
			'search_Total' => $searchResults['total'],
			'searchResults' => $searchResults['result'],
			'limit_item' => Configuration::get('LIMIT_ITEM'),
			'query' => $query
		));
}
else
{
	Context::getContext()->smarty->assign(array(
			'search_Total' => 0,
			'searchResults' => null,
			'limit_item' => Configuration::get('LIMIT_ITEM'),
			'query' => $query
		));
}
echo $livesearch->display(dirname(__FILE__).'/wtblocksearch.php', 'wt_search_result.tpl');
