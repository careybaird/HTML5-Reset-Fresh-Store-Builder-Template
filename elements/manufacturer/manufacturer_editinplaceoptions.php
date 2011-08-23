<div id="manufacturer_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="Effect.BlindUp('manufacturer_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>
	
	<p><span class="editinplace-label">Name:</span> <span class="editinplace-value" id="manufacturer-name"><?= $manufacturer['name'] ?></span></p>
	
	<p><span class="editinplace-label">Link Title:</span> <span class="editinplace-value" id="manufacturer-linktitle"><?= $manufacturer['linktitle'] ?></span></p>
	
	<p><span class="editinplace-label">Logo Caption:</span> <span class="editinplace-value" id="manufacturer-logocaption"><?= $manufacturer['logocaption'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Description:</span> <span class="editinplace-value" id="manufacturer-metadescription"><?= $manufacturer['metadescription'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Keywords:</span> <span class="editinplace-value" id="manufacturer-metakeywords"><?= $manufacturer['metakeywords'] ?></span></p>
	
	<p><span class="editinplace-label">Meta Title:</span> <span class="editinplace-value" id="manufacturer-metatitle"><?= $manufacturer['metatitle'] ?></span></p>
	
	<p><span class="editinplace-label">Pagename:</span> <span class="editinplace-value" id="manufacturer-pagename"><?= $manufacturer['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>