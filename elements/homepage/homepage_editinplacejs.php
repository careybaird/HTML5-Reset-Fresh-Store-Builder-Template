<script type="text/javascript">
	EditInPlace.defaults['save_url'] = '/ajax/page_savefield.php?id=<?= $page['id'] ?>';
	
	$('page-title').editInPlace({});
	$('page-linktitle').editInPlace({});
	$('custompage-logocaption').editInPlace({});
	$('page-maintext').editInPlace({form_type: 'textarea', empty_text: '<em>'.gTT('EDITINPLACE_ADD_DESCRIPTION').'</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('page-metadescription').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a meta description.</em>'});
	$('page-metakeywords').editInPlace({});
	$('page-metatitle').editInPlace({});
</script>
