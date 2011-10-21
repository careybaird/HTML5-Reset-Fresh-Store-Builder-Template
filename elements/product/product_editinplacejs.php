<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/product_savefield.php?id=<?=$product['id']?>';
	
	$('#product-title').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#product-description').editInPlace({url: save_url, field_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#product-descriptionsecondary').editInPlace({url: save_url, field_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_SECONDARYDESCRIPTION')?></em>'});
	$('#product-keyfeatures').editInPlace({url: save_url, field_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_KEYFEATURES')?></em>'});
	$('#product-linktitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#product-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#product-metakeywords').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#product-metatitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#product-pagename').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	
	function removeProductFromCategory(product_id, category_id, element)
	{
		jQuery.Ajax({
			type: "GET",
			data: 'product_id='+product_id+'&category_id='+category_id,
			url: '/ajax/product_removefromcategory.php',
			beforeSend: function()
			{
				$(element).attr('src', '/icons/common_loading.gif');
			},
			success: function()
			{
				$(element).attr('src', '/icons/admin_success.png');
			}
		});
	}
});
</script>
