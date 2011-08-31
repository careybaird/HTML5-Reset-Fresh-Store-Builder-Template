<script type="text/javascript">
	EditInPlace.defaults['save_url'] = '/ajax/product_savefield.php?id=<?= $product['id'] ?>';
	
	$('product-title').editInPlace({});
	$('product-description').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a description.</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('product-descriptionsecondary').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a secondary description.</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('product-keyfeatures').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add key features.</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('product-linktitle').editInPlace({});
	$('product-logocaption').editInPlace({});
	$('product-metadescription').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a meta description.</em>'});
	$('product-metakeywords').editInPlace({});
	$('product-metatitle').editInPlace({});
	$('product-pagename').editInPlace({});
	
	function removeProductFromCategory(product_id, category_id, element)
	{
		new Ajax.Request('/ajax/product_removefromcategory.php?product_id='+product_id+'&category_id='+category_id,{method:'get',onLoading:function(){ element.src = '/icons/common_loading.gif'; },onComplete:function(){ element.src = '/icons/admin_success.png'; }});
	}
</script>
