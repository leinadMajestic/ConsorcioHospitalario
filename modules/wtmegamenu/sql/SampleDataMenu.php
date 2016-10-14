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

class SampleDataMenu
{
	public function initData()
	{
		$return = true;
		$languages = Language::getLanguages(true);
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'wtmegamenu` (`id_wtmegamenu`, `type_link`, `dropdown`, `type_icon`, `icon`, `align_sub`, `width_sub`, `class`, `active`, `position`) VALUES 
		(1, 0, 0, 0, "", "wt-sub-auto", "col-md-6", "", 1, 0),
		(2, 0, 1, 0, "", "wt-sub-auto", "col-md-2", "", 1, 1),
		(3, 0, 0, 0, "", "wt-sub-auto", "col-md-6", "", 1, 2),
		(4, 0, 0, 0, "", "wt-sub-left", "col-md-12", "menu-comectic", 1, 3),
		(5, 1, 0, 0, "", "wt-sub-auto", "col-md-12", "", 1, 4),
		(6, 0, 0, 0, "", "wt-sub-auto", "", "", 1, 0),
		(7, 0, 0, 0, "", "wt-sub-auto", "", "", 1, 0);');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'wtmegamenu_shop` (`id_wtmegamenu`, `id_shop`, `type_link`, `dropdown`, `type_icon`, `icon`, `align_sub`, `width_sub`, `class`, `active`, `position`) VALUES 
		(1, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "col-md-6", "", 1, 0),
		(2, '.$id_shop.', 0, 1, 0, "", "wt-sub-auto", "col-md-2", "", 1, 1),
		(3, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "col-md-6", "", 1, 2),
		(4, '.$id_shop.', 0, 0, 0, "", "wt-sub-left", "col-md-12", "menu-comectic", 1, 3),
		(5, '.$id_shop.', 1, 0, 0, "", "wt-sub-auto", "col-md-12", "", 1, 4),
		(6, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "", "", 1, 0),
		(7, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "", "", 1, 0);');
		
		foreach ($languages as $language)
		{
			$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'wtmegamenu_lang` (`id_wtmegamenu`, `id_shop`, `id_lang`, `title`, `link`, `subtitle`) VALUES 
			(1, '.$id_shop.', '.$language['id_lang'].', "PAGindex", "PAGindex", ""),
			(2, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
			(3, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
			(4, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
			(5, '.$id_shop.', '.$language['id_lang'].', "Blog", "index.php?fc=module&module=wtblog&controller=categoryPost&mainlink=wtblog", ""),
			(6, '.$id_shop.', '.$language['id_lang'].', "CAT2", "CAT2", ""),
			(7, '.$id_shop.', '.$language['id_lang'].', "PAGbest-sales", "PAGbest-sales", "");');
		}
		return $return;
	}
}
?>