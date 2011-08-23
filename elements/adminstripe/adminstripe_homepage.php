<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('page_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="Show Quick Edit Options" title="Show Quick Edit Options" />
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_categorylist.png" alt="List Categories in Admin" title="List Categories in Admin" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_manufacturerlist.png" alt="List Manufacturers in Admin" title="List Manufacturers in Admin" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
