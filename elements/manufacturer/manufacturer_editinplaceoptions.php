<div id="manufacturer_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="$('#manufacturer_editinplacebox').hide('fast','swing'); ; return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>
	
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_NAME')?></span> <span class="editinplace-value" id="manufacturer-name"><?= $manufacturer['name'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_LINKTITLE')?></span> <span class="editinplace-value" id="manufacturer-linktitle"><?= $manufacturer['linktitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METADESCRIPTION')?></span> <span class="editinplace-value" id="manufacturer-metadescription"><?= $manufacturer['metadescription'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METAKEYWORDS')?></span> <span class="editinplace-value" id="manufacturer-metakeywords"><?= $manufacturer['metakeywords'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METATITLE')?></span> <span class="editinplace-value" id="manufacturer-metatitle"><?= $manufacturer['metatitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_PAGENAME')?></span> <span class="editinplace-value" id="manufacturer-pagename"><?= $manufacturer['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>
