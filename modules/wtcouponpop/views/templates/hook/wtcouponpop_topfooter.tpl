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
<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block col-xs-12 clearfix">
	<div class="wt-out-letter">
	<h4>{l s='Our Newsletter' mod='wtcouponpop'}</h4>
	<div class="block_content clearfix">
		<form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
			<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
			  <div class="out-inputNew">
			
				<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{if isset($msg) && $msg}{$msg|escape:'html':'UTF-8'}{elseif isset($value) && $value}{$value|escape:'html':'UTF-8'}{else}{l s='Enter your e-mail' mod='wtcouponpop'}{/if}" />
			 </div>
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                    <span>{l s='Subscrible' mod='wtcouponpop'}</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>
    {hook h="displayBlockNewsletterBottom" from='wtcouponpop'}
  </div>
</div>
<!-- /Block Newsletter module-->
{strip}
{if isset($msg) && $msg}
{addJsDef msg_newsl=$msg|@addcslashes:'\''}
{/if}
{if isset($nw_error)}
{addJsDef nw_error=$nw_error}
{/if}
{addJsDefL name=placeholder_wtcouponpop}{l s='Enter your e-mail' mod='wtcouponpop' js=1}{/addJsDefL}
{if isset($msg) && $msg}
	{addJsDefL name=alert_wtcouponpop}{l s='Newsletter : %1$s' sprintf=$msg js=1 mod='wtcouponpop'}{/addJsDefL}
{/if}
{/strip}