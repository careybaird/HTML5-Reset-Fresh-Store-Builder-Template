<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('page_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMINSTRIPE_EDIT')?>" title="<?=gTT('ADMINSTRIPE_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_categorylist.png" alt="<?=gTT('ADMIN_STRIPE_LIST_CATEGORIES')?>" title="<?=gTT('ADMIN_STRIPE_LIST_CATEGORIES')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_manufacturerlist.png" alt="<?=gTT('ADMIN_STRIPE_LIST_MANUFACTURERS')?>" title="<?=gTT('ADMIN_STRIPE_LIST_MANUFACTURERS')?>" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
