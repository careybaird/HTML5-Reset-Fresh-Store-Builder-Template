<div id="admin-stripe">
	<div id="admin-stripe-left">
		<strong><a href="<?= URL_SITE.'freshadmin/' ?>">Control Panel</a></strong>
		- <strong><a href="<?= URL_SITE ?>freshadmin/user/logout/">Log Out</a></strong>
		- <a href="http://www.freshstorebuilder.com/account/">My Account</a>
		- <a href="http://www.freshstorebuilder.com/guides/">Guides</a>
		- <a href="http://www.freshstorebuilder.com/tools/">Tools</a>
		- <a href="http://www.freshstorebuilder.com/extras/">Extras</a>
		- <a href="http://forum.freshstorebuilder.com/">Forum</a>
		- <a href="http://www.freshstorebuilder.com/support/">Support</a>
	</div>
	
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