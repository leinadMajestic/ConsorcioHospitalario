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

{extends file="helpers/form/form.tpl"}
{block name="other_input"}
	{if $key eq 'selects'}
	<div class="form-group">
	<label for="select_right" class="control-label col-lg-3 required">{l s='Post:' mod='wtblog'}</label>
	<div class="col-lg-9">
	<table class="double_select">
		<tr>
			<td>
				<select multiple id="select_left">
					{foreach from=$field.products_unselected item='product'}
					<option value="{$product.id_wt_blog_post|escape:'html':'UTF-8'}">{$product.name|escape:'html':'UTF-8'}</option>
					{/foreach}
				</select>
				<span class="hint" name="help_box">{l s='Double click to move the item to another column' mod='wtblog'}<span class="hint-pointer">&nbsp;</span></span>
				<br /><br />
				<a href="#" id="move_to_right" class="multiple_select_add btn btn-default">
					{l s='Add' mod='wtblog'} &gt;&gt;
				</a>
			</div>
			</td>
			<td>
				<select multiple id="select_right" name="posts[]">
					{foreach from=$field.products item='product'}
					<option selected="selected" value="{$product.id_wt_blog_post|escape:'html':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</option>
					{/foreach}
				</select>
				<span class="hint" name="help_box">{l s='Double click to move the item to another column' mod='wtblog'}<span class="hint-pointer">&nbsp;</span></span>
				<br /><br />
				<a href="#" id="move_to_left" class="multiple_select_remove btn btn-default">
					&lt;&lt; {l s='Remove' mod='wtblog'}
				</a>
			</td>
		</tr>
	</table>
	</div>
	</div>
	<div class="clear">&nbsp;</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$('#move_to_right').click(function(){
			return !$('#select_left option:selected').remove().appendTo('#select_right');
		})
		$('#move_to_left').click(function(){
			return !$('#select_right option:selected').remove().appendTo('#select_left');
		});
		$('#select_left option').live('dblclick', function(){
			$(this).remove().appendTo('#select_right');
		});
		$('#select_right option').live('dblclick', function(){
			$(this).remove().appendTo('#select_left');
		});
	});
	$('#cs_blog_tag_form').submit(function()
	{
		$('#select_right option').each(function(i){
			$(this).attr("selected", "selected");
		});
	});
	</script>
	{/if}
{/block}
