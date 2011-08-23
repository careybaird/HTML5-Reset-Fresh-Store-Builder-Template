<div id="admin-stripe">
	<?php loadTemplateElement('adminstripe', 'left'); ?>
	
	<div id="admin-stripe-right">
		<a href="#" id="stripe_togglefields" onclick="Effect.BlindDown('category_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickeditshow.png" alt="Show Quick Edit Options" title="Show Quick Edit Options" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/edit/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_edit.png" alt="Edit" title="Edit" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/product/bycategorylist/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_productlist.png" alt="List Products in Admin" title="List Products in Admin" />
		</a>
		<a href="<?= URL_SITE ?>freshadmin/category/populate/<?= $thiscategory['id'] ?>/">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_autopopulateedit.png" alt="Auto Populate Settings" title="Auto Populate Settings" />
		</a>
		<?php
			if ($thiscategory['populationtype'] !== '' && $thiscategory['populationtype'] !== 'cancel' )
			{
				?>
					<a href="<?= URL_SITE ?>freshadmin/category/runpopulate/<?= $thiscategory['id'] ?>/">
						<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_autopopulatego.png" alt="Manually Run Auto Populate" title="Manually Run Auto Populate" class="middle" />
					</a>
				<?php
			}
		?>
	</div>
	
	<br class="clearall" />
</div>
