<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $manufacturer;
?>
<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('page_editinplacebox').show('slow','swing'); return false;">
			<?=getTemplateImage('ADMINSTRIPE_QUICK_EDIT','','',gTT('ADMINSTRIPE_QUICK_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT','','',gTT('ADMINSTRIPE_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/list/">
			<?=getTemplateImage('ADMINSTRIPE_LIST_PAGES','','',gTT('ADMINSTRIPE_LIST_PAGES'))?>
		</a>
	</div>
	
	<br class="clearall" />
</div>
