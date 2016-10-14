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

	$themes_colors = array(
		'default'
	);
	
	$items_settings = array(
		'body_color' => array(
			'text' => 'Background color of body',
			'note' => 'Support Box Layout Only',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' => 'body',
			),
			'default_val' => '#fff',
			'frontend' => true,
		),
		'content_bkg' => array(
			'text' => 'Background content',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' =>'body #page,#index #page',
			),
			'default_val' => '#fff',
			'frontend' => true,
		),
		'footer_bkg' => array(
			'text' => 'Background footer',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' =>'.out-footer',
			),
			'default_val' => '#151314', 
			'frontend' => true,
		),
		'main_color' => array(
			'text' => 'Main color',
			'note' => 'Button, label Sale,...',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' =>'#slider-wrapper .slideshow-title,.box-info-product .exclusive,.cart_block .cart-buttons a#button_order_cart,.button.button-medium, .button.lnk_view, .closefb, .cart_navigation .button-medium, .button.button-medium.exclusive, .comment_form button, #wt_reset,.address_add .button.button-small,.wishlist a:hover, .compare a:hover, .button.ajax_add_to_cart_button:hover, .quick-view:hover,#wt-prod-manu-tabs li.active, #wt-prod-manu-tabs li:hover,.shop-brand,.g-top-menu,#header > .container > .row,.button.ajax_add_to_cart_button,.wt-menu-sticky,.cat-view-more a:hover,.wishlist a.checked, .compare a.checked, .button.ajax_add_to_cart_button.checked, .quick-view.checked,.header-top,.read-more a,#newsletter_block_left .wt-out-letter .form-group button:hover',
				
				
				'color' =>'.wt-menu-horizontal .menu-subtitle,#free-shipping-top span, a:focus,#blog_latest_new_home .post_title a:hover,#layered_block_left .nomargin a:hover, #manufacturers_block_left ul li a:hover,#categories_block_left li span.grower:hover + a, #categories_block_left li a:hover, #categories_block_left li a.selected, #blog_categories li span.grower:hover + a, #blog_categories li a:hover, #blog_categories li a.selected,#subcategories ul li .subcategory-name:hover,.block a:hover,.box-info-product .exclusive:hover,.cart_block .cart-buttons a#button_order_cart:hover span,#cart_summary tbody td.cart_avail span,#cart_summary tfoot td.total_price_container span,#cart_summary tfoot td#total_price_container,.button.button-medium:hover, .button.lnk_view:hover, .closefb:hover, .cart_navigation .button-medium:hover, .button.button-medium.exclusive:hover, .comment_form button:hover, #wt_reset:hover,.address_add .button.button-small:hover,#my-account ul.myaccount-link-list li:hover a,.product-name a:hover,.product-name:hover,#wt-special-products .price.product-price,.wt-menu-horizontal ul li.level-1 ul li a:hover,.wt-menu-horizontal ul li.level-1 ul li.parent:hover:after, #wt-menu-ver-left .category-left li.level-1:hover:after,#wt-menu-ver-left .category-left .menu-dropdown li a:hover,.free-block li h3,.hello-top a,.box-info-product .exclusive:hover span,#availability_statut span.label-success,#usefull_link_block li a:hover,#usefull_link_block li a:hover,#productscategory_list .product-name a:hover,#header .cart_block a:hover,.wt_category_feature  .cat-infor h4 a:hover,.wt_countdown .time-down i:before,.special-price,.more-info span,a:hover, a:focus,.banner-view-cat .g-mask a:hover,.footer-copyright .content-bottom a,.footer-copyright .content-bottom a:hover, .footer-copyright .content-top ul li a:hover,.shop-brand:hover,.sub-cat .sub-cat-ul li  a:hover,.read-more a:hover,.wt_category_feature .item .sub-cat ul li a:hover,.wt_category_feature .item .cat-infor h4 a:hover,.wt-homebottom-block a:hover,#newsletter_block_left .wt-out-letter .form-group button,.footer-container #footer #social_block ul li a,.wt-menu-horizontal ul li.level-1:hover > a', 
				
				
				'border-color' =>'.box-info-product .exclusive,.cart_block .cart-buttons a#button_order_cart,.button.button-medium, .button.lnk_view, .closefb, .cart_navigation .button-medium, .button.button-medium.exclusive, .comment_form button, #wt_reset,.address_add .button.button-small,#my-account ul.myaccount-link-list li:hover a i,.wishlist a:hover, .compare a:hover, .button.ajax_add_to_cart_button:hover, .quick-view:hover,.shop-brand,.more-info span,.shop-brand:hover,.cat-view-more a:hover,.owl-carousel .owl-controls .owl-nav .owl-prev:hover, .owl-carousel .owl-controls .owl-nav .owl-next:hover, .owl-carousel .owl-controls .owl-nav a:hover, div.bx-wrapper .bx-controls-direction .owl-prev:hover, div.bx-wrapper .bx-controls-direction .owl-next:hover, div.bx-wrapper .bx-controls-direction a:hover,.banner-view-cat .g-mask a:hover,.read-more a,ul.product_list.list > li .wishlist a:hover, ul.product_list.list > li .compare a:hover, ul.product_list.list > li .button.ajax_add_to_cart_button:hover, ul.product_list.list > li .quick-view:hover,.comparison_product_infos .button.ajax_add_to_cart_button:hover,#newsletter_block_left .wt-out-letter .form-group button:hover',
				'background-color_10'=>'',
				'border-color_-20' =>'',
				'background-color_-20' => ''
				),
			'default_val' => '#437a7d',
			'frontend' => true,
		),
		'primary1_color' => array(
			'text' => 'Primary color 1',
			'note' => '',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' =>'',
				'color' =>'body,div.selector select,.wt_category_feature .item .sub-cat ul li a,.form-control,.tags_block .block_content a,.post_title a, .post_title,.myaccount-column .list-block li a,#categories_block_left li a, #blog_categories li a,#wt-menu-ver-left .category-left li a,#layered_block_left .nomargin a, #manufacturers_block_left ul li a,.pb-center-column p,.pb-center-column p label,ul.step li.step_todo span, ul.step li.step_todo a,ul.step li.step_done a,.checkbox label,p.payment_module a span,.wt-menu-horizontal ul li.level-1 ul li a,#wt-menu-ver-left .category-left .menu-dropdown li a,#wt-menu-ver-left .category-left .menu-dropdown li.item-header a,a,.sub-cat .sub-cat-ul li  a,#wt-prod-manu-tabs li a,.wishlist a:before, .compare a:before, .button.ajax_add_to_cart_button:before, .quick-view:before,.content_sortPagiBar .sortPagiBar label,#product_comments_block_tab .comment_author_infos em,.footer-container #footer a,.footer-container #footer,.footer-copyright .content-top ul li a,.block-coppy-right',
				'border-color' =>'',
				'background-color_10'=>'',
				'border-color_10' =>'',
				'background-color_-20' => ''
				),
			'default_val' => '#666',
			'frontend' => true,
		),
		
		'primary2_color' => array(
			'text' => 'Primary color 2',
			'note' => '',
			'attr_css' => 'color',
			'selector' => array(
				'background-color' =>'.top-pagination-content ul.pagination li.active, .bottom-pagination-content ul.pagination li.active,.top-pagination-content ul.pagination li.pagination_previous.disabled, .top-pagination-content ul.pagination li.pagination_previous:hover, .top-pagination-content ul.pagination li.pagination_next.disabled, .top-pagination-content ul.pagination li.pagination_next:hover, .bottom-pagination-content ul.pagination li.pagination_previous.disabled, .bottom-pagination-content ul.pagination li.pagination_previous:hover, .bottom-pagination-content ul.pagination li.pagination_next.disabled, .bottom-pagination-content ul.pagination li.pagination_next:hover,.top-pagination-content ul.pagination li:hover, .bottom-pagination-content ul.pagination li:hover,.button.button-small, .cart_navigation .button-exclusive, .button.exclusive-medium,#wishlist_button:hover, #wishlist_button_nopop:hover,.tags_block .block_content a:hover',
				
				'color' =>'.hello-top h3,.hello-top h4,.wt-special-products .block-title h3,.block-title h3,#wt-prod-filter-tabs.nav-tabs > li.active > a, #wt-prod-filter-tabs.nav-tabs > li > a:hover, #wt-prod-filter-tabs.nav-tabs > li > a:focus,.wt_countdown .time-down,.timer span,.out-wt-prod h3 a,.wt-block-title h3,.free-des,.free-block li:hover h3,.wt_category_feature .cat-infor h4 a,#newsletter_block_left .wt-out-letter h4,#newsletter_block_left .wt-out-letter .form-group .form-control,.testimonial-author .author,.block .title_block, .block h4,#layered_block_left .layered_subtitle,#subcategories p.subcategory-heading,#subcategories ul li .subcategory-name,.pb-center-column h1,h3.page-product-heading,.table-data-sheet tr td:first-child,#productscategory_list .product-name a,.button.button-small:hover, .cart_navigation .button-exclusive:hover, .button.exclusive-medium:hover,.block a,#wt_post .post_title,label,#header .cart_block a,#header .cart_block .product-atributes a,#header .cart_block .price.cart_block_shipping_cost, .labels_cart.cart_block_shipping_label,#header .cart_block .out_cart_block_total span,.cart_block .cart-info .quantity-formated,ul.step li a, ul.step li span, ul.step li.step_current span, ul.step li.step_current_end span,#cart_summary thead th,.cart_voucher h4,.table tfoot > tr > td,#cart_summary tfoot td.text-right, #cart_summary tfoot tbody td.cart_total, #cart_summary tbody tfoot td.cart_total,.page-subheading,ul.step li.step_done a:hover,.order_carrier_content .carrier_title,p.payment_module a span.payment-first,.dark,.product-name a,.product-name,.price.product-price,.price,.page-heading,.page-heading span.heading-counter,#product_comments_block_tab div.comment .comment_details strong,#product_comments_block_tab div.comment .comment_author span,.blog-info,.breadcrumb,.breadcrumb a', 
				
				'border-color' =>'.top-pagination-content ul.pagination li.active, .bottom-pagination-content ul.pagination li.active,.top-pagination-content ul.pagination li.pagination_previous.disabled, .top-pagination-content ul.pagination li.pagination_previous:hover, .top-pagination-content ul.pagination li.pagination_next.disabled, .top-pagination-content ul.pagination li.pagination_next:hover, .bottom-pagination-content ul.pagination li.pagination_previous.disabled, .bottom-pagination-content ul.pagination li.pagination_previous:hover, .bottom-pagination-content ul.pagination li.pagination_next.disabled, .bottom-pagination-content ul.pagination li.pagination_next:hover,.top-pagination-content ul.pagination li:hover, .bottom-pagination-content ul.pagination li:hover,.button.button-small, .cart_navigation .button-exclusive, .button.exclusive-medium,#wishlist_button:hover, #wishlist_button_nopop:hover,.tags_block .block_content a:hover',
				
				'background-color_10'=>'',
				'border-color_10' =>'',
				'background-color_-20' => ''
				),
			'default_val' => '#333', 
			'frontend' => true,
		),
		
		
		
		
		'body_font' => array(
			'text' => 'Font of body',
			'note' => 'text desction, link footer,...',
			'attr_css' => 'font-family',
			'selector' => 'body,#newsletter_block_left .wt-out-letter h4,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6,.product-name,.pb-center-column h1,.wt-menu-horizontal ul li.level-1 > a,.price.product-price,.price,.footer-container #footer a,.block .title_block, .block h4,#subcategories ul li .subcategory-name,.cart_block .cart-buttons a#button_order_cart span,.labels_cart,.table tfoot > tr > td,#cart_summary tfoot td.total_price_container span,#cart_summary tfoot td#total_price_container,.header_user_info a,.sub-cat .sub-cat-ul li  a,#wt-prod-manu-tabs li a,#newsletter_block_left .wt-newsletter_img h4,#newsletter_block_left .wt-newsletter_img p,#newsletter_block_left .wt-out-letter .form-group button,#newsletter_block_left .wt-out-letter .form-group .form-control,.out-block-testimonial .items-aline,#blog_latest_new_home .item .blog-content,.footer-container #footer h4,.block-coppy-right,.footer-container #footer #block_contact_infos > div ul li,#currencies-block-top div.current,.shopping_cart > a:first-child,.page-heading,.free-shipping p,.more-info,#wt-prod-filter-tabs.nav > li > a,.cont-manu > p,.shop-brand,.wt-homebottom-block,.cat-view-more a',
			'frontend' => true,
		),
		'secondary_font' => array(
			'text' => 'Font of title',
			'note' => 'title...',
			'attr_css' => 'font-family',
			'selector' => '.free-shipping h4',
			'frontend' => true,
		)
	);
