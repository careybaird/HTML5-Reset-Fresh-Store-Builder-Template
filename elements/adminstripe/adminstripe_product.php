<div id="admin-stripe">
	<?php require('admin_stripe_left.php'); ?>
	
	<div id="admin-stripe-right">
		Sales Rank: <?= $product['salesrank'] ?> &nbsp;-&nbsp; ASIN: <?= $product['asin'] ?>
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('product_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="Show Quick Edit Options" title="Show Quick Edit Options" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/contenttemplate/generate/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_generatecontent.png" alt="Generate Content" title="Generate Content" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_update.png" alt="Update" title="Update" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $product['manufacturer_id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_manufactureredit.png" alt="Edit Manufacturer" title="Edit Manufacturer" />
		</a>
		<a href="<?= $product['url'] ?>">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/amazon_<?= strtolower(AMAZON_LOCALE) ?>.png" alt="view on Amazon" title="view on Amazon" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/changestatus/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_<?= ($product['enabled'] ? 'disable' : 'enable') ?>.png" alt="Change Product Status" title="Change Product Status" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/hide/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_hide.png" alt="Hide" title="Hide" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/delete/<?= $product['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_delete.png" alt="Delete" title="Delete" />
		</a>
	</div>

	<br class="clearall" />
</div>
