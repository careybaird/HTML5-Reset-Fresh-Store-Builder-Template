<div class="product-listing-admin">
	<a href="<?= URL_SITE ?>freshadmin/product/edit/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMIN_STRIPE_EDIT')?>" title="<?=gTT('ADMIN_STRIPE_EDIT')?>" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/update/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_update.png" alt="<?=gTT('ADMIN_STRIPE_UPDATE')?>" title="<?=gTT('ADMIN_STRIPE_UPDATE')?>" />
	</a>
	<a href="<?= $product['url'] ?>">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/amazon_<?= strtolower(AMAZON_LOCALE) ?>.png" alt="<?=gTT('ADMIN_STRIPE_AMAZON')?>" title="<?=gTT('ADMIN_STRIPE_AMAZON')?>" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/removefromcategory/<?= $product['id'] ?>/<?= $thiscategory['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_removefromcategory.png" alt="<?=gTT('ADMIN_STRIPE_REMOVE_CATEGORY')?>" title="<?=gTT('ADMIN_STRIPE_REMOVE_CATEGORY')?>" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/changestatus/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_<?= ($product['enabled'] ? 'disable' : 'enable') ?>.png" alt="<?=gTT('ADMIN_STRIPE_PRODUCT_STATUS')?>" title="<?=gTT('ADMIN_STRIPE_PRODUCT_STATUS')?>" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/hide/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_hide.png" alt="<?=gTT('ADMIN_STRIPE_HIDE')?>" title="<?=gTT('ADMIN_STRIPE_HIDE')?>" />
	</a>
	<a href="<?= URL_SITE ?>freshadmin/product/delete/<?= $product['id'] ?>/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_delete.png" alt="<?=gTT('ADMIN_STRIPE_DELETE')?>" title="<?=gTT('ADMIN_STRIPE_DELETE')?>" />
	</a>
</div>
