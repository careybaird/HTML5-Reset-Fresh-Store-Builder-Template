<div id="admin-stripe">
	<?php require('elements/admin_stripe_left.php'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('manufacturer_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="Show Quick Edit Options" title="Show Quick Edit Options" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/edit/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/images/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_image.png" alt="Edit Images" title="Edit Images" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bymanufacturerlist/<?= $manufacturer['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="List Products in Admin" title="List Products in Admin" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
