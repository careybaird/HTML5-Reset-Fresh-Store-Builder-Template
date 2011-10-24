<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $manufacturer;
?>
<script type="text/javascript">
$(document).ready(function()
{
	save_url = '/ajax/manufacturer_savefield.php?id=<?= $manufacturer['id'] ?>';
	
	$('#manufacturer-name').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#manufacturer-pageheading').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#manufacturer-linktitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#manufacturer-description').editInPlace({url: save_url, field_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_DESCRIPTION')?></em>'});
	$('#manufacturer-metadescription').editInPlace({url: save_url, field_type: 'textarea', default_text: '<em><?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?></em>'});
	$('#manufacturer-metakeywords').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#manufacturer-metatitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	$('#manufacturer-pagename').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
});
</script>
