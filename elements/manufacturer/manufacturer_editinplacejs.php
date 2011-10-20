<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/manufacturer_savefield.php?id=<?=$manufacturer['id']?>';
	
	$('#manufacturer-name').editInPlace({url: save_url});
	$('#manufacturer-pageheading').editInPlace({url: save_url});
	$('#manufacturer-linktitle').editInPlace({url: save_url});
	$('#manufacturer-description').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#manufacturer-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#manufacturer-metakeywords').editInPlace({url: save_url});
	$('#manufacturer-metatitle').editInPlace({url: save_url});
	$('#manufacturer-pagename').editInPlace({url: save_url});
});
</script>
