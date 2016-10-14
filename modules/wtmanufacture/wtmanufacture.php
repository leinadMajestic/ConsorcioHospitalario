<?php
/**
* 2007-2014 PrestaShop
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
*  @copyright 2007-2014 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class WtManufacture extends Module
{
	public function __construct()
	{
		$this->name = 'wtmanufacture';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'waterthemes';
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('WT Manufacture Block');
		$this->description = $this->l('Show Manufacture and banner');
	}
	
	public function install()
	{
		if (!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displayTopFooter'))
			return false;
		return true;	
	}
	public function uninstall()
	{
		return parent::uninstall();
	}
	
	public function getContentForHook()
	{
		$this->context = Context::getContext();
		$manufacturers = Manufacturer::getManufacturers(false, 0, true);
		if (!empty($manufacturers))
		{
			$this->context->smarty->assign(array(
				'manufacs' => $manufacturers,
				'ps_manu_img_dir' => _PS_MANU_IMG_DIR_
			));
			return $this->display(__FILE__, 'wtmanufacture.tpl');
		}
	}
	public function hookDisplayHeader()
	{
		$this->context->controller->addCSS($this->_path.'views/css/wtmanufacture.css', 'all');
	}
	public function hookDisplayTopFooter()
	{
		return $this->getContentForHook();
	}
}