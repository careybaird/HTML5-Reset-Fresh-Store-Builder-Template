<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $manufacturer;
?>
<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('#manufacturer_editinplacebox').show('slow','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMINSTRIPE_EDIT')?>" title="<?=gTT('ADMINSTRIPE_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/images/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_image.png" alt="<?=gTT('ADMINSTRIPE_EDIT_IMAGES')?>" title="<?=gTT('ADMINSTRIPE_EDIT_IMAGES')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bymanufacturerlist/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="<?=gTT('ADMINSTRIPE_LIST_PRODUCTS')?>" title="<?=gTT('ADMINSTRIPE_LIST_PRODUCTS')?>" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
