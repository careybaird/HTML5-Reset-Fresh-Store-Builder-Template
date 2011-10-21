<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $product;
?>
<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		Sales Rank: <?= $product['salesrank'] ?> &nbsp;-&nbsp; ASIN: <?= $product['asin'] ?>
		<a href="#" id="stripe_togglefields" onclick="$('product_editinplacebox').show('slow','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMINSTRIPE_EDIT')?>" title="<?=gTT('ADMINSTRIPE_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/contenttemplate/generate/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_generatecontent.png" alt="<?=gTT('ADMIN_STRIPE_GENERATE_CONTENT')?>" title="<?=gTT('ADMIN_STRIPE_GENERATE_CONTENT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_update.png" alt="<?=gTT('ADMIN_STRIPE_UPDATE')?>" title="<?=gTT('ADMIN_STRIPE_UPDATE')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $product['manufacturer_id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_manufactureredit.png" alt="<?=gTT('ADMIN_STRIPE_EDIT_MANUFACTURER')?>" title="<?=gTT('ADMIN_STRIPE_EDIT_MANUFACTURER')?>" />
		</a>
		<a href="<?= $product['url'] ?>">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/amazon_<?= strtolower(AMAZON_LOCALE) ?>.png" alt="<?=gTT('ADMIN_STRIPE_AMAZON')?>" title="<?=gTT('ADMIN_STRIPE_AMAZON')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/changestatus/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_<?= ($product['enabled'] ? 'disable' : 'enable') ?>.png" alt="<?=gTT('ADMIN_STRIPE_PRODUCT_STATUS')?>" title="<?=gTT('ADMIN_STRIPE_PRODUCT_STATUS)?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/hide/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_hide.png" alt="<?=gTT('ADMIN_STRIPE_HIDE')?>" title="<?=gTT('ADMIN_STRIPE_HIDE')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/delete/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_delete.png" alt="<?=gTT('ADMIN_STRIPE_DELETE')?>" title="<?=gTT('ADMIN_STRIPE_DELETE')?>" />
		</a>
	</div>

	<br class="clearall" />
</div>
