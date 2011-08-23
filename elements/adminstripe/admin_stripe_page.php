<div id="admin-stripe">
	<?php require('admin_stripe_left.php'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('page_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="Show Quick Edit Options" title="Show Quick Edit Options" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="List Pages in Admin" title="List Pages in Admin" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
