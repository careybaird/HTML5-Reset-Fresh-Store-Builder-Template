<script type="text/javascript">
	EditInPlace.defaults['save_url'] = '/ajax/category_savefield.php?id=<?= $thiscategory['id'] ?>';
	
	$('category-title').editInPlace({});
	$('category-description').editInPlace({form_type: 'textarea', empty_text: '<em>'.gTT('EDITINPLACE_ADD_DESCRIPTION').'</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('category-descriptionbottom').editInPlace({form_type: 'textarea', empty_text: '<em>'.gTT('EDITINPLACE_ADD_DESCRIPTION').'</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('category-linktitle').editInPlace({});
	$('category-logocaption').editInPlace({});
	$('category-metadescription').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a meta description.</em>'});
	$('category-metakeywords').editInPlace({});
	$('category-metatitle').editInPlace({});
	$('category-pagename').editInPlace({});
</script>
