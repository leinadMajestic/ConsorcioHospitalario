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


{if isset($group_attributes)}

{foreach $group_attributes as $k=>$v}
	{if $v.group_name =='Size'}
		<div class="wt_size">
			{$tam='zero'}
			<ul>
				{foreach $group_attributes as $k1=>$v1}
					{if $v1.group_name =='Size'}
						{if $tam != $v1.attribute_name}
						<li>{$v1.attribute_name|escape:'html':'UTF-8'}</li>
						{$tam=$v1.attribute_name}
						{/if}
					{/if}
				{/foreach}
			</ul>
		</div>
		{break}
	{/if}
{/foreach}


{/if}

{if isset($group_attributes)}
{foreach $group_attributes as $k=>$v}
	{if $v.group_name =='MobileSize'}
		<div class="wt_size">
			{$tam='zero'}
			<ul>
				{foreach $group_attributes as $k1=>$v1}
					{if $v1.group_name =='MobileSize'}
						{if $tam != $v1.attribute_name}
							<li>{$v1.attribute_name|escape:'html':'UTF-8'}</li>
							{$tam=$v1.attribute_name}
						{/if}
					{/if}
				{/foreach}
			</ul>
		</div>
		{break}
	{/if}
{/foreach}
{/if}


{if isset($group_attributes)}
{foreach $group_attributes as $k=>$v}
	{if $v.group_name =='Color'}
		<div class="wt_color">
			{$tam1='zero'}
			<ul>
				{foreach $group_attributes as $k2=>$v2}
					{if $v2.group_name =='Color'}
						{if $tam1 != $v2.attribute_name}
						<li style="background:{$v2.attribute_color|escape:'html':'UTF-8'}"></li>
						{$tam1=$v2.attribute_name}
						{/if}
					{/if}
				{/foreach}
			</ul>
		</div>
		{break}
	{/if}
{/foreach}
{/if}