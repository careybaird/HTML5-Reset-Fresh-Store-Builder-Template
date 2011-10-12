<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('category_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" title="<?=gTT('ADMINSTRIPE_QUICK_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/edit/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="<?=gTT('ADMINSTRIPE_EDIT')?>" title="<?=gTT('ADMINSTRIPE_EDIT')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bycategorylist/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="<?=gTT('ADMINSTRIPE_LIST_PRODUCTS')?>" title="<?=gTT('ADMINSTRIPE_LIST_PRODUCTS')?>" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/populate/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_autopopulateedit.png" alt="<?=gTT('ADMINSTRIPE_AUTOPOPULATE')?>" title="<?=gTT('ADMINSTRIPE_AUTOPOPULATE')?>" />
		</a>
		<?php
			if ($thiscategory['populationtype'] !== '' && $thiscategory['populationtype'] !== 'cancel' )
			{
				?>
					<a href="<?= URL_SITE ?>freshadmin/category/runpopulate/<?= $thiscategory['id'] ?>/">
						<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_autopopulatego.png" alt="<?=gTT('ADMINSTRIPE_RUN_AUTOPOPULATE')?>" title="<?=gTT('ADMINSTRIPE_RUN_AUTOPOPULATE')?>" class="middle" />
					</a>
				<?php
			}
		?>
	</div>
	
	<br class="clearall" />
</div>
