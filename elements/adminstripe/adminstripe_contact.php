<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('#page_editinplacebox').show('fast','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
	</div>
	
	<br class="clearall" />
</div>
