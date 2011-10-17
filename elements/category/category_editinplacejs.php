<script type="text/javascript">
	$(document).ready(function()
	{
		save_url = '/ajax/category_savefield.php?id=<?=$thiscategory['id']?>';
	
		$('#category-title').editInPlace({url: save_url});
		$('#category-maintext').editInPlace({url: save_url, field_type: 'textarea', empty_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
		$('#category-descriptionbottom').editInPlace({url: save_url, field_type: 'textarea', empty_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
		$('#category-linktitle').editInPlace({url: save_url});
		$('#category-metadescription').editInPlace({url: save_url, field_type: 'textarea', empty_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
		$('#category-metakeywords').editInPlace({url: save_url});
		$('#category-metatitle').editInPlace({url: save_url});
		$('#category-pagename').editInPlace({url: save_url});
	});
</script>
