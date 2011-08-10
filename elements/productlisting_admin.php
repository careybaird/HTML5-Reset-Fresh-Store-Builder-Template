<div class="product-listing-admin">
	<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_update.png" alt="Update" title="Update" />
	</a>
	<a href="<?= $product['url'] ?>">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/amazon_<?= strtolower(AMAZON_LOCALE) ?>.png" alt="view on Amazon" title="view on Amazon" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/removefromcategory/<?= $product['id'] ?>/<?= $thiscategory['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_removefromcategory.png" alt="Remove from Category" title="Remove from Category" />
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
