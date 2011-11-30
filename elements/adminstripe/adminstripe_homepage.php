<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('#page_editinplacebox').show('slow','swing'); return false;">
			<?=getTemplateImage('ADMINSTRIPE_QUICK_EDIT','','',gTT('ADMINSTRIPE_QUICK_EDIT'))?>
		<a href="<?= URL_SITE ?>freshadmin/page/edit/<?= $page['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT','','',gTT('ADMINSTRIPE_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/list/">
			<?=getTemplateImage('ADMINSTRIPE_LIST_CATEGORIES','','',gTT('ADMINSTRIPE_LIST_CATEGORIES'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/manufacturer/list/">
			<?=getTemplateImage('ADMINSTRIPE_LIST_MANUFACTURERS','','',gTT('ADMINSTRIPE_LIST_MANUFACTURERS'))?>
		</a>
	</div>
	
	<br class="clearall" />
</div>
