<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/product_savefield.php?id=<?=$product['id']?>';
	
	$('#product-title').editInPlace({url: save_url});
	$('#product-description').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#product-descriptionsecondary').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_SECONDARYDESCRIPTION')?></em>'});
	$('#product-keyfeatures').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_KEYFEATURES')?></em>'});
	$('#product-linktitle').editInPlace({url: save_url});
	$('#product-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#product-metakeywords').editInPlace({url: save_url});
	$('#product-metatitle').editInPlace({url: save_url});
	$('#product-pagename').editInPlace({url: save_url});
	
	function removeProductFromCategory(product_id, category_id, element)
	{
		// This will have to be updated
		new Ajax.Request('/ajax/product_removefromcategory.php?product_id='+product_id+'&category_id='+category_id,{method:'get',onLoading:function(){ element.src = '/icons/common_loading.gif'; },onComplete:function(){ element.src = '/icons/admin_success.png'; }});
	}
}
</script>
