<div id="category_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="Effect.BlindUp('category_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>
	
	<p><span class="editinplace-label">Link Title:</span> <span class="editinplace-value" id="category-linktitle"><?= $thiscategory['linktitle'] ?></span></p>
	
	<p><span class="editinplace-label">Logo Caption:</span> <span class="editinplace-value" id="category-logocaption"><?= $thiscategory['logocaption'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Description:</span> <span class="editinplace-value" id="category-metadescription"><?= $thiscategory['metadescription'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Keywords:</span> <span class="editinplace-value" id="category-metakeywords"><?= $thiscategory['metakeywords'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Title:</span> <span class="editinplace-value" id="category-metatitle"><?= $thiscategory['metatitle'] ?></span></p>
	
	<p><span class="editinplace-label">Pagename:</span> <span class="editinplace-value" id="category-pagename"><?= $thiscategory['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>