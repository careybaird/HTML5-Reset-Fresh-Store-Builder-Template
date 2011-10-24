<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $thiscategory;
?>
<script type="text/javascript">
	$(document).ready(function()
	{
		save_url = '/ajax/category_savefield.php?id=<?= $thiscategory['id'] ?>';
	
		$('#category-title').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
		$('#category-description').editInPlace({url: save_url, field_type: 'textarea', default_text: '(<?=gTT('EDITINPLACE_ADD_DESCRIPTION')?>)'});
		$('#category-descriptionbottom').editInPlace({url: save_url, field_type: 'textarea', default_text: '(<?=gTT('EDITINPLACE_ADD_DESCRIPTION')?>)'});
		$('#category-linktitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
		$('#category-metadescription').editInPlace({url: save_url, field_type: 'textarea', default_text: '(<?=gTT('EDITINPLACE_ADD_METADESCRIPTION')?>)'});
		$('#category-metakeywords').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
		$('#category-metatitle').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
		$('#category-pagename').editInPlace({url: save_url, default_text: '(<?=gTT('EDITINPLACE_ADD_TEXT')?>)'});
	});
</script>
