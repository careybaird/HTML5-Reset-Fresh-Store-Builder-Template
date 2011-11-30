<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="$('#category_editinplacebox').show('slow','swing'); return false;">
			<?=getTemplateImage('ADMINSTRIPE_QUICK_EDIT','','',gTT('ADMINSTRIPE_QUICK_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/edit/<?= $category['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_EDIT','','',gTT('ADMINSTRIPE_EDIT'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bycategorylist/<?= $category['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_LIST_PRODUCTS','','',gTT('ADMINSTRIPE_LIST_PRODUCTS'))?>
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/populate/<?= $category['id'] ?>/">
			<?=getTemplateImage('ADMINSTRIPE_AUTOPOPULATE','','',gTT('ADMINSTRIPE_AUTOPOPULATE'))?>
		</a>
		<?php
			if ($category['populationtype'] !== '' && $category['populationtype'] !== 'cancel' )
			{
				?>
					<a href="<?= URL_SITE ?>freshadmin/category/runpopulate/<?= $category['id'] ?>/">
						<?=getTemplateImage('ADMINSTRIPE_RUN_AUTOPOPULATE','','',gTT('ADMINSTRIPE_RUN_AUTOPOPULATE'))?>
					</a>
				<?php
			}
		?>
	</div>
	
	<br class="clearall" />
</div>
