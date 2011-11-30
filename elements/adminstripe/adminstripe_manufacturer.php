<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('#manufacturer_editinplacebox').show('slow','swing'); return false;">
			<?=getTemplateImage('ADMINSTRIPE_QUICK_EDIT','','',gTT('ADMINSTRIPE_QUICK_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $manufacturer['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT','','',gTT('ADMINSTRIPE_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/images/<?= $manufacturer['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT_IMAGES','','',gTT('ADMINSTRIPE_EDIT_IMAGES'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bymanufacturerlist/<?= $manufacturer['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_LIST_PRODUCTS','','',gTT('ADMINSTRIPE_LIST_PRODUCTS'))?>
		</a>
	</div>
	
	<br class="clearall" />
</div>
