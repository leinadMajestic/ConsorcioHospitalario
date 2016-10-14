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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $instantsearch}
	<script type="text/javascript">
	// <![CDATA[
		function tryToCloseInstantSearch() {
			if ($('#old_center_column').length > 0)
			{
				$('#center_column').remove();
				$('#old_center_column').attr('id', 'center_column');
				$('#center_column').show();
				return false;
			}
		}
		
		instantSearchQueries = new Array();
		function stopInstantSearchQueries(){
			for(i=0;i<instantSearchQueries.length;i++) {
				instantSearchQueries[i].abort();
			}
			instantSearchQueries = new Array();
		}
	
			
		$("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").keyup(function(){
			var select = $( "#search_category" ),
			options = select.find( "option" ),
			selectType = options.filter( ":selected" ).attr( "value" );
			if($(this).val().length > 0){
				stopInstantSearchQueries();
				instantSearchQuery = 
				$.ajax({
					url: '{if $search_ssl == 1}{$link->getModuleLink("wtblocksearch", "catesearch", array(), true)|escape:"quotes":"UTF-8"}{else}{$link->getModuleLink("wtblocksearch", "catesearch")|escape:"quotes":"UTF-8"}{/if}',
					data: {
						instantSearch: 1,
						id_lang: {$cookie->id_lang|intval},
						id_category: selectType,
						q: $(this).val()
					},
					dataType: 'html',
					type: 'POST',
					success: function(data){
						if($("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").val().length > 0)
						{
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + '">'+data+'</div>');
							$('#old_center_column').hide();
							ajaxCart.overrideButtonsInThePage();
							$("#instant_search_results a.close").click(function() {
								$("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").val('');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	// ]]>
	</script>
{/if}
{if $ajaxsearch}
	<script type="text/javascript">
	// <![CDATA[
    var moduleDir = "{$module_dir|escape:'quotes':'UTF-8'}";
    var maxResults = 15;
		
		$('document').ready( function(){
			var select = $( "#search_category" ),
            options = select.find( "option" ),
            selectType = options.filter( ":selected" ).attr( "value" );
			
			select.change(function () {
				selectType = options.filter( ":selected" ).attr( "value" );
			});
       
            $("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").autocomplete(
                '{if $search_ssl == 1}{$link->getModuleLink("wtblocksearch", "catesearch", array(), true)|escape:"quotes":"UTF-8"}{else}{$link->getModuleLink("wtblocksearch", "catesearch")|escape:"quotes":"UTF-8"}{/if}', {
        			minChars: 3,
        			max: maxResults,
        			width: 500,
        			selectFirst: false,
        			scroll: false,
                    cacheLength: 0,
        			dataType: "json",
        			formatItem: function(data, i, max, value, term) {
        				return value;
        			},
        			parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname, icon: data[i].product_image};
							return mytab;
						},
        			extraParams: {
        				ajax_Search: 1,
        				id_lang: {$cookie->id_lang|intval},
                        id_category: selectType
        			}
                }
            ).result(function(event, data, formatted) {
				$("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").val(data.pname);
				document.location.href = data.product_link;
			});
        
            select.change(function () {
                selectType = options.filter( ":selected" ).attr( "value" );
                $( ".ac_results" ).remove();
                $("#search_query_{$categorysearch_type|escape:'html':'UTF-8'}").autocomplete(
                    '{if $search_ssl == 1}{$link->getModuleLink("wtblocksearch", "catesearch", array(), true)|escape:"quotes":"UTF-8"}{else}{$link->getModuleLink("wtblocksearch", "catesearch")|escape:"quotes":"UTF-8"}{/if}', {
            			minChars: 3,
            			max: maxResults,
            			width: 500,
            			selectFirst: false,
            			scroll: false,
                        cacheLength: 0,
            			dataType: "json",
            			formatItem: function(data, i, max, value, term) {
            				return value;
            			},
            			parse: function(data) {
            			     
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
							{
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
                                mytab[mytab.length] = { data: data[i], value: '<span class="ac_product_name">' + data[i].pname + '</span>' };
							}
							return mytab;
						},
            			extraParams: {
            				ajax_Search: 1,
            				id_lang: {$cookie->id_lang|intval},
                            id_category: selectType
            			}
                    }
                );
            });
		});
	// ]]>
	</script>
{/if}

