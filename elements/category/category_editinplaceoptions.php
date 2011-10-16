<div id="category_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="$('#category_editinplacebox').hide('fast','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_LINKTITLE')?></span> <span class="editinplace-value" id="category-linktitle"><?= $thiscategory['linktitle'] ?></span></p>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METADESCRIPTION')?></span> <span class="editinplace-value" id="category-metadescription"><?= $thiscategory['metadescription'] ?></span></p>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METAKEYWORDS')?></span> <span class="editinplace-value" id="category-metakeywords"><?= $thiscategory['metakeywords'] ?></span></p>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METATITLE')?></span> <span class="editinplace-value" id="category-metatitle"><?= $thiscategory['metatitle'] ?></span></p>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_PAGENAME')?></span> <span class="editinplace-value" id="category-pagename"><?= $thiscategory['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>
