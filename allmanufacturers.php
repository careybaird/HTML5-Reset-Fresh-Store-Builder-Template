<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<ul class="manufacturers-list">
	<?php
		foreach ($manufacturers as $manufacturer)
		{
			?>
			<li class="manufacturers-item">
				<a href="<?= URL_SITE.$manufacturer['pagename'] ?>/" class="manufacturer-link">
					<?= $manufacturer['name'] ?>
					<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturer['filename'] ?>&w=250&h=250" class="manufacturer-image" />
				</a>
			</li>
			<?php
		}
	?>
</ul>
