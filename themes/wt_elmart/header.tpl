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
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		{if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}
		<link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Coda:400,800' rel='stylesheet' type='text/css'>		
		{if $page_name == 'cms'}
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,600,700' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/core.min.css" />
			<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/skin-acerca.css" />
			<!--<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/font-awesome.min.css">-->
			<!--<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/animate.css">
			<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>-->

			<!--<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/bootstrap.min.css">-->
			<!--<link rel="stylesheet" href="/consorcioHospitalario/themes/wt_elmart/css/cms/main.css">
			<script src="/consorcioHospitalario/themes/wt_elmart/js/cms/modernizr-2.7.1.js"></script>-->
  		{/if}
	</head>
	
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso}{if $box_mode==1} box-mode{/if}">
	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<div id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</div>
		{/if}
		{capture name='displayTopPage'}{hook h='displayTopPage'}{/capture}
			{if $smarty.capture.displayTopPage}
				{$smarty.capture.displayTopPage}
		{/if}
		<div id="page">
			<div class="header-container">
				<header id="header">
					<div class="banner">
						<div class="container">
							<div class="row">
								{hook h="displayBanner"}
							</div>
						</div>
					</div>
					<div class="mod_head">
						<div class="container">
							<div class="nav">
								<nav>{hook h="displayNav"}</nav>
							</div>
						</div>
					</div>
					<div class="wt-top-menu">
					 <div class="container">
					   <div class="g-top-menu">
							<div id="header_logo" >
								<a href="{if $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
									<img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"/>
								</a>
							</div>
							{if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
						</div>
					</div>
					 
					</div>
				</header>
			</div>
			 {if $page_name !='index' && $page_name !='pagenotfound'}
			     <div class="top-column">
					<div class="container top_cat">
						<div class="top-title clearfix">
							{include file="$tpl_dir./breadcrumb.tpl"}
						</div>
					</div>
				</div>
			{/if}
			{if $page_name =='index' && $page_name !='pagenotfound'}
			<div id="slider_row">
			  <div class="container">
			    <div class="row">
				  <div id="top_column" class="center_column col-xs-12">{hook h="displayTopColumn"}</div>
			    </div>
			   </div>
			</div>
			{/if}
			<div class="columns-container">
				<div id="columns" class="container" {if $page_name == 'cms'} style="margin-top:-30px;padding:0px;"{/if}>
					<div class="row">
						
						{if isset($left_column_size) && !empty($left_column_size) && $page_name != category && $page_name != cms}
							{$col_sm = $left_column_size + 1}
						<div id="left_column" class="column col-xs-12 col-sm-{$col_sm|intval} col-md-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
						{/if}
						
						{if isset($left_column_size) && isset($right_column_size)}
							{assign var='cols' value=(12 - $left_column_size - $right_column_size)}
							{if ($left_column_size + $right_column_size) > 0}
								{assign var='col_sm' value=(12 - $left_column_size - $right_column_size - 1)}
							{else}
								{assign var='col_sm' value=12}
							{/if}
						{else}
							{assign var='cols' value=12}
							{assign var='col_sm' value=12}
						{/if}
						
						<!--<div id="center_column" style="border:red solid 1px" class="center_column col-xs-12 col-sm-{$col_sm|intval} col-md-{$cols|intval}">-->
						<div id="center_column" {if $page_name == 'cms'} style="padding: 0;"{else} class="center_column col-xs-12 col-sm-12"{/if}>
						{if $page_name =='index' && $page_name !='pagenotfound'}
							{hook h="displayTopHome"}
						{/if}						
						
	{/if}
