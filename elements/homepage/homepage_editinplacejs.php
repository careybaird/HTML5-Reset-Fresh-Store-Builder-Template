<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/page_savefield.php?id=<?=$page['id']?>';
	
	$('#page-title').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-linktitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-maintext').editInPlace({url: save_url, form_type: 'textarea', default_text: '(<?=gTT('EDITINPLACE_ADD_DESCRIPTION')?>)'});
	$('#page-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '(<?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?>)'});
	$('#page-metakeywords').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-metatitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
});
</script>
