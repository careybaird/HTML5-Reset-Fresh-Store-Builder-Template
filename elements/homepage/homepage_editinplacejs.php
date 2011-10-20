<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/page_savefield.php?id=<?=$page['id']?>';
	
	$('#page-title').editInPlace({url: save_url});
	$('#page-linktitle').editInPlace({url: save_url});
	$('#page-maintext').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#page-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#page-metakeywords').editInPlace({url: save_url});
	$('#page-metatitle').editInPlace({url: save_url});
});
</script>
