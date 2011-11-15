<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $product;
?>
<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		Sales Rank: <?= $product['salesrank'] ?> &nbsp;-&nbsp; ASIN: <?= $product['asin'] ?>
		<a href="#" id="stripe_togglefields" onclick="$('#product_editinplacebox').show('slow','swing'); return false;">
			<?=getTemplateImage('ADMINSTRIPE_QUICK_EDIT','','',gTT('ADMINSTRIPE_QUICK_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT','','',gTT('ADMINSTRIPE_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/contenttemplate/generate/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_GENERATE_CONTENT','','',gTT('ADMINSTRIPE_GENERATE_CONTENT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_UPDATE','','',gTT('ADMINSTRIPE_UPDATE'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $product['manufacturer_id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT_MANUFACTURER','','',gTT('ADMINSTRIPE_EDIT_MANUFACTURER'))?>
		</a>
		<a href="<?= $product['url'] ?>">
			<?=getTemplateImage('ADMINSTRIPE_AMAZON','','',gTT('ADMINSTRIPE_AMAZON'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/changestatus/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_PRODUCT_STATUS','','',gTT('ADMINSTRIPE_PRODUCT_STATUS'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/hide/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_HIDE','','',gTT('ADMINSTRIPE_HIDE'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/delete/<?= $product['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_DELETE','','',gTT('ADMINSTRIPE_DELETE'))?>
		</a>
	</div>

	<br class="clearall" />
</div>
