<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('page_editinplacebox').show('fast','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMINSTRIPE_EDIT')?>" title="<?=gTT('ADMINSTRIPE_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/page/list/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="<?=gTT('ADMIN_STRIPE_LIST_PAGES')?>" title="<?=gTT('ADMIN_STRIPE_LIST_PAGES')?>" />
		</a>
	</div>
	
	<br class="clearall" />
</div>
