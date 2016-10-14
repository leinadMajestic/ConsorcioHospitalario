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
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/
$(document).ready(function(){
	
	$("#search_query_nav").click(function()
	{
		$("#search_block_top").addClass('show');
		$('#close_search_query_nav').show();
		$("#search_query_nav").hide();
	});
	
	$('#close_search_query_nav').click(function()
	{
		$('#wtsearch_content_result').slideUp(300);
		$("#search_block_top").removeClass('show');
		$('body').removeClass('search-fixed');
		$("#search_query_nav").show();
		$('#close_search_query_nav').hide();
	});
		
		var loanding="<p class='loanding'></p>";
		var content_result = "<div id='wtsearch_content_result'><div class='over_light'></div><div id='wtsearch_eccept_data'></div></div>";
		$(content_result).insertAfter("#search_block_top" );

	$('#searchbox input.search_query').keyup(function(){ 
	   $('.ac_results').remove();
	   $('#wtsearch_eccept_data').html(loanding);
		$('#wtsearch_content_result').slideDown(400);
		if(this.value.length<3)
		$('#wtsearch_eccept_data').html(limit_character);				
		else
		{
			var id_cat = $('#search_category').val();
			doLiveSearch(this.value, id_cat);
		}
		
	});
	
	$( "#search_category" ).change(function() {
		 $('#wtsearch_eccept_data').html(loanding);
		if($('#searchbox input.search_query').val().length < 3)
		{
			$('#wtsearch_eccept_data').html(limit_character);
		}
		else
		{
			var id_cat = $('#search_category').val();
			doLiveSearch($('#searchbox input.search_query').val(), id_cat);
		}
	});

	
	
});
function doLiveSearch(inputString, id_cat) {

		$.post(
		    $('#wt_url_ajax_search input.url_ajax').val(), 
			{queryString: inputString, id_Cat: id_cat},
			function(data) 
			{ 
				$('#wtsearch_eccept_data').html(data);
				$('body').addClass('search-fixed');
				$('.ajax_add_to_cart_button').click(function(){
					var idProduct =  $(this).attr('id');
					if ($(this).attr('disabled') != 'disabled')
						ajaxCart.add(idProduct, null, false, this);
				})
		});
	
}

function Show_All_Search()
{
	$( "#searchbox" ).submit();
}
