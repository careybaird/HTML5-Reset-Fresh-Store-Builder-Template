<?php
	// This is temporarily, it will be moved to the controller as soon as edits start on the core files
	global $product;
?>
<div id="product_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="$('#product_editinplacebox').hide('slow','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_KEYFEATURES')?></span> <span class="editinplace-value" id="product-keyfeatures"><?= $product['keyfeatures'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_LINKTITLE')?></span> <span class="editinplace-value" id="product-linktitle"><?= $product['linktitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METADESCRIPTION')?></span> <span class="editinplace-value" id="product-metadescription"><?= $product['metadescription'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METAKEYWORDS')?></span> <span class="editinplace-value" id="product-metakeywords"><?= $product['metakeywords'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METATITLE')?></span> <span class="editinplace-value" id="product-metatitle"><?= $product['metatitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_PAGENAME')?></span> <span class="editinplace-value" id="product-pagename"><?= $product['pagename'] ?></span></p>
	<p>
		<span class="editinplace-label"><?=gTT('EDITINPLACE_CATEGORIES')?></span>
		<span class="editinplace-value">
		<?php
			foreach ($breadcrumb as $bc_item)
			{
				$deletecategoryname = '';
				foreach ($bc_item as $bc_category)
				{
					if (isset($bc_category['category_id']))
					{
						$deletecategoryname .= $bc_category['name'].' / ';
						$deletecategory_id = $bc_category['category_id'];
					}
				}
				?>
					<a href="javascript:removeProductFromCategory(<?= $product['id'] ?>, <?= $deletecategory_id ?>, '#removefromcategory_<?= $deletecategory_id ?>')"><img id="removefromcategory_<?= $deletecategory_id ?>" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_delete.png" /></a> <?= $deletecategoryname ?><br />
				<?php
			}			
		?>
		</span>
	</p>
	
	<br class="clearall" />
</div>
