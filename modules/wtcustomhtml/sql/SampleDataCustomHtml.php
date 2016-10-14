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

class SampleDataCustomHtml
{
	public function initData()
	{
		$result = true;
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		
		$block1 = '<div class="wt-homebottom-block"><i class="icon-tag"></i> shop more. save more. <span>$30 off $150 - $50 off $200 - $70 off $250 - *</span><a href="#"> more info here</a></div>';
		
		$block2 = '<div class="content-top">\r\n<ul>\r\n<li><a title="Online Shopping" href="#">Online Shopping</a></li>\r\n<li><a title="Buy Sell" href="#">Buy Sell</a></li>\r\n<li><a title="All Promotions" href="#">All Promotions </a></li>\r\n<li><a title="My Orders" href="#">My Orders</a></li>\r\n<li><a title="Help" href="#">Help</a></li>\r\n<li><a title="Site Map" href="#">Site Map</a></li>\r\n<li><a title="Customer Service" href="#">Customer Service</a></li>\r\n<li><a title="About" href="#">About</a></li>\r\n<li><a title="Contact" href="#">Contact</a></li>\r\n</ul>\r\n</div>\r\n<div class="content-bottom">\r\n<p>© 2016 <a href="#">Bingomart</a> Prestashop Themes by <a href="#">Waterthemes</a></p>\r\n</div>\r\n<div class="payment-icon">\r\n<ul>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/paypal.png" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/master_cart.png" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/visa.png" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/american.png" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/rss.png" alt="" /></a></li>\r\n</ul>\r\n</div>';
		
		$block3 = '<div class="bn-top-home row">\r\n<div class="free-shipping free-shipping-1 col-sm-4">\r\n<h4>award 24/7 customer care</h4>\r\n</div>\r\n<div class="free-shipping free-shipping-2 col-sm-4">\r\n<h4>buy 3 beauty minis, get 1 free.*</h4>\r\n</div>\r\n<div class="free-shipping free-shipping-3 col-sm-4">\r\n<h4>bingo earth month: 20% off &gt;</h4>\r\n</div>\r\n</div>';
		
		$block4 = '<div class="banner-home clearfix">\r\n<ul>\r\n<li class="banner-home-1">\r\n<ul>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-st-1.jpg" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-st-2.jpg" alt="" /></a></li>\r\n</ul>\r\n</li>\r\n<li class="banner-home-2">\r\n<ul>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-st-3.jpg" alt="" /></a></li>\r\n<li><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-st-4.jpg" alt="" /></a></li>\r\n</ul>\r\n</li>\r\n<li class="banner-home-3"><a href="#"><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-st-5.jpg" alt="" /></a></li>\r\n</ul>\r\n</div>';
		
		$block5 = '<p><img src="{static_block_url}themes/wt_bingomart/img/cms/bn-foot_1.jpg" alt="" /></p>\r\n<p>Add: Lorem Tspime 3-7A, Danies Steet, Riverside</p>\r\n<p>Tel: 010 978 559 7005</p>';
		
		$block6 = '<div class="top-column-bannert"><a href="#"> <img src="{static_block_url}themes/wt_bingomart/img/cms/bn-right.jpg" alt="" /></a></div>';
		
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wtcustomhtml` (`id_wtcustomhtml`, `hook`, `active`) 
			VALUES
			(1, "displayBottomHome", 1),
			(2, "displayCopyRight", 1),
			(3, "displayTopHome", 1),
			(4, "displayTopExtra", 1),
			(5, "displayFooter", 1),
			(6, "displayTopColumn", 1);'); 
		
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wtcustomhtml_shop` (`id_wtcustomhtml`, `id_shop`,`active`) 
			VALUES 
			(1,'.$id_shop.', 1),
			(2,'.$id_shop.', 1),
			(3,'.$id_shop.', 1),
			(4,'.$id_shop.', 1),
			(5,'.$id_shop.', 1),
			(6,'.$id_shop.', 1);');
			
		foreach (Language::getLanguages(false) as $lang)
		{
			$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'wtcustomhtml_lang` (`id_wtcustomhtml`, `id_shop`, `id_lang`, `title`, `content`) 
			VALUES 
			("1", "'.$id_shop.'","'.$lang['id_lang'].'","Shop More", \''.$block1.'\'),
			("2", "'.$id_shop.'","'.$lang['id_lang'].'","Footer Links + Copy Right  + Payment", \''.$block2.'\'),
			("3", "'.$id_shop.'","'.$lang['id_lang'].'","Free Shipping Top Home", \''.$block3.'\'),
			("4", "'.$id_shop.'","'.$lang['id_lang'].'","Banner Top Home", \''.$block4.'\'),
			("5", "'.$id_shop.'","'.$lang['id_lang'].'","Discount Footer", \''.$block5.'\'),
			("6", "'.$id_shop.'","'.$lang['id_lang'].'","Top Column Banner", \''.$block6.'\');');
		}
		return $result;
	}
}