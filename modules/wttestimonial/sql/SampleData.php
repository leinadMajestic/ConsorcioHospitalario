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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2014 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class SampleDataTestimoial
{
	public function initData()
	{
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		$result = true;
		
		$text1 = '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames lorem turpis egestas. Ut laoreet augue sit amet dui cursus aliquet ultrices sagittis lestee et scelerisque massa venenatis eget</p>';
		
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wttestimonial` (`id_wttestimonial`, `file_name`, `active`) VALUES 
			(1, "reinsurance-1-1.png", 1);');
		
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wttestimonial_shop` (`id_wttestimonial`, `id_shop`,`active`) VALUES 
			(1,'.$id_shop.', 1);');
		
		foreach (Language::getLanguages(false) as $lang)
		{
			$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wttestimonial_lang` (`id_wttestimonial`, `id_lang`, `id_shop`, `title`, `job`, `link`, `text`) 
			VALUES 
			("1", "'.$lang['id_lang'].'","'.$id_shop.'","Rulian Rose", "FashionStar", "#", \''.$text1.'\');');
		}
		return $result;
	}
}