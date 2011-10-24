<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $page;
?>
<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/page_savefield.php?id=<?=$page['id']?>';
	
	$('#page-title').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-linktitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-maintext').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#page-metadescription').editInPlace({url: save_url, form_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#page-metakeywords').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#page-metatitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
}
</script>
