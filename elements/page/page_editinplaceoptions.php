<div id="page_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="$('#page_editinplacebox').hide('fast','swing'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>

	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_PAGETITLE')?></span> <span class="editinplace-value" id="page-title"><?= $page['title'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_LINKTITLE')?></span> <span class="editinplace-value" id="page-linktitle"><?= $page['linktitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_MAINTEXT')?></span> <span class="editinplace-value" id="page-maintext"><?= htmlentities($page['maintext']) ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METADESCRIPTION')?></span> <span class="editinplace-value" id="page-metadescription"><?= $page['metadescription'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METAKEYWORDS')?></span> <span class="editinplace-value" id="page-metakeywords"><?= $page['metakeywords'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_METATITLE')?></span> <span class="editinplace-value" id="page-metatitle"><?= $page['metatitle'] ?></span></p>
	<p><span class="editinplace-label"><?=gTT('EDITINPLACE_PAGENAME')?></span> <span class="editinplace-value" id="page-pagename"><?= $page['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>
