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
class WtAttributes extends Module
{
	public function __construct()
	{
		$this->name = 'wtattributes';
		$this->tab = 'front_office_features';
		$this->version = '1.1.0';
		$this->author = 'waterthemes';
		$this->need_instance = 0;
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('WT Attributes Products');
		$this->description = $this->l('Show block Attributes products.');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}
	public function install()
	{
		if (!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displayProductAttributes'))
			return false;
		return true;
	}
	public function hookDisplayHeader()
	{
		$this->context->controller->addCSS(($this->_path).'views/css/wtattributes.css', 'all');
	}
	public function hookDisplayProductAttributes($params)
	{
		if (!$this->isCached('wtattributes.tpl', $this->getCacheId()))
		{
			$id_lang = $this->context->language->id;
			$id_product = $params['product']['id_product'];
			$product = new Product($id_product);
			$group_attributes = $product->getAttributesGroups($id_lang);
			$this->context->smarty->assign(array(
				'group_attributes' => $group_attributes
			));
		}
		return $this->display(__FILE__, 'wtattributes.tpl', $this->getCacheId());
	}
}