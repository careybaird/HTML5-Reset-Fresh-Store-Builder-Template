<script type="text/javascript">
	save_url = '/ajax/page_savefield.php?id=<?=$page['id']?>';
	
	$('#page-title').editInPlace({url: save_url});
	$('#page-linktitle').editInPlace({url: save_url});
	$('#page-maintext').editInPlace({url: save_url, form_type: 'textarea', empty_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#page-metadescription').editInPlace({url: save_url, form_type: 'textarea', empty_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#page-metakeywords').editInPlace({url: save_url});
	$('#page-metatitle').editInPlace({url: save_url});
</script>
