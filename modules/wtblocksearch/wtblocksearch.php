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

if (!defined('_PS_VERSION_'))
	exit;

class WtBlockSearch extends Module
{
	public function __construct()
	{
		$this->name = 'wtblocksearch';
		$this->tab = 'search_filter';
		$this->version = '1.1.0';
		$this->author = 'waterthemes';
		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('WT Quick Search');
		$this->description = $this->l('Show a quick search field to your website.');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}

	public function install()
	{
		if (!parent::install() || !$this->registerHook('displayNav') || !$this->registerHook('header'))
			return false;
		return true;
	}

	public function hookHeader($params)
	{
		if (Configuration::get('PS_SEARCH_AJAX'))
			$this->context->controller->addJqueryPlugin('autocomplete');
		$this->context->controller->addCSS(_THEME_CSS_DIR_.'product_list.css');
		$this->context->controller->addCSS(($this->_path).'views/css/wtsearch.css', 'all');
		if (Configuration::get('PS_SEARCH_AJAX'))
			Media::addJsDef(array('search_url' => $this->context->link->getPageLink('search', Tools::usingSecureMode())));
	}

	public function hookDisplayNav($params)
	{
		$key = $this->getCacheId('wtblocksearch-top'.((!isset($params['hook_mobile']) || !$params['hook_mobile']) ? '' : '-hook_mobile'));
		if (Tools::getValue('search_query') || !$this->isCached('wtblocksearch-top.tpl', $key))
		{
			$this->calculHookCommon($params);
			$this->smarty->assign(array(
				'search_category' => $this->getCategoryOption(),
				'categorysearch_type' => 'top',
				'search_query' => (string)Tools::getValue('search_query')
				)
			);
		}
		Media::addJsDef(array('categorysearch_type' => 'top'));
		return $this->display(__FILE__, 'wtblocksearch-top.tpl', Tools::getValue('search_query') ? null : $key);
	}

	private function calculHookCommon($params)
	{
		$this->smarty->assign(array(
			'ENT_QUOTES' =>		ENT_QUOTES,
			'search_ssl' =>		Tools::usingSecureMode(),
			'ajaxsearch' =>		Configuration::get('PS_SEARCH_AJAX'),
			'instantsearch' =>	Configuration::get('PS_INSTANT_SEARCH'),
			'self' =>			dirname(__FILE__),
		));

		return true;
	}
	private function getCategoryOption($id_category = 1, $id_lang = false, $id_shop = false, $recursive = true)
	{
		$html = '';
		$id_lang = $id_lang ? (int)$id_lang : (int)Context::getContext()->language->id;
		$category = new Category((int)$id_category, (int)$id_lang, (int)$id_shop);
		if (is_null($category->id))
			return;
		if ($recursive)
		{
			$children = Category::getChildren((int)$id_category, (int)$id_lang, true, (int)$id_shop);
				$spacer = '';
			if ($category->level_depth > 0)
			
				$spacer = str_repeat('-', 2 * ((int)$category->level_depth - 1));
		}
		$shop = (object)Shop::getShop((int)$category->getShopID());
		if ($category->id != Configuration::get('PS_ROOT_CATEGORY'))
			$html .= '<option value="'.(int)$category->id.'">'.$spacer.$category->name.'</option>';
		if (isset($children) && count($children))
		foreach ($children as $child)
			$html .= $this->getCategoryOption((int)$child['id_category'], (int)$id_lang, (int)$child['id_shop'], $recursive);
		return $html;
	}
}