<div id="page_editinplacebox" class="editinplace-box" style="display:none;">
	<div class="editinplace-close">
		<a href="#" onclick="Effect.BlindUp('page_editinplacebox'); return false;">
			<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/admin_quickedithide.png" />
		</a>
	</div>

	<p><span class="editinplace-label">Page Title:</span> <span class="editinplace-value" id="page-title"><?= $page['title'] ?></span></p>
	<p><span class="editinplace-label">Link Title:</span> <span class="editinplace-value" id="page-linktitle"><?= $page['linktitle'] ?></span></p>
	<p><span class="editinplace-label">Logo Caption:</span> <span class="editinplace-value" id="custompage-logocaption"><?= $page['logocaption'] ?></span></p>
	<p><span class="editinplace-label">Main Text:</span> <span class="editinplace-value" id="page-maintext"><?= htmlentities($page['maintext']) ?></span></p>
	<p><span class="editinplace-label">Meta Description:</span> <span class="editinplace-value" id="page-metadescription"><?= $page['metadescription'] ?></span></p>
	<p><span class="editinplace-label">Meta Keywords:</span> <span class="editinplace-value" id="page-metakeywords"><?= $page['metakeywords'] ?></span></p>
	<p><span class="editinplace-label">Meta Title:</span> <span class="editinplace-value" id="page-metatitle"><?= $page['metatitle'] ?></span></p>
	<p><span class="editinplace-label">Pagename:</span> <span class="editinplace-value" id="page-pagename"><?= $page['pagename'] ?></span></p>
	
	<br class="clearall" />
</div>