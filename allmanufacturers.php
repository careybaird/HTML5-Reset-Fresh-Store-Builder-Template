<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<ul id="manufactuerers-list">
	<?php
		foreach ($manufacturers as $manufacturer)
		{
			?>
			<li class="manufactuerers-item">
				<a href="<?= URL_SITE.$manufacturer['pagename'] ?>/" class="manufacturer-link">
					<?= $manufacturer['name'] ?>
					<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturer['filename'] ?>&w=250&h=250" class="manufacturer-image" />
				</a>
			</li>
			<?php
		}
	?>
</ul>
