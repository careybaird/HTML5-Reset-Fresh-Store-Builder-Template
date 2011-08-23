<script type="text/javascript">
	EditInPlace.defaults['save_url'] = '/ajax/manufacturer_savefield.php?id=<?= $manufacturer['id'] ?>';
	
	$('manufacturer-name').editInPlace({});
	$('manufacturer-pageheading').editInPlace({});
	$('manufacturer-linktitle').editInPlace({});
	$('manufacturer-logocaption').editInPlace({});
	$('manufacturer-description').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a description.</em>', save_on_enter: false, display_buttons: 'inherit'});
	$('manufacturer-metadescription').editInPlace({form_type: 'textarea', empty_text: '<em>Click to add a meta description.</em>'});
	$('manufacturer-metakeywords').editInPlace({});
	$('manufacturer-metatitle').editInPlace({});
	$('manufacturer-pagename').editInPlace({});
</script>