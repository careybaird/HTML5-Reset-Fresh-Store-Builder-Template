<h2 class="page-title"><?= $page['title'] ?></h2>

<?php
	foreach ($manufacturers as $manufacturer)
	{
		?>
		<div class="manufacturer-box">
			<h3 class="manufacturer-title"><a href="<?= URL_SITE ?<?= $manufacturer['pagename'] ?>/"><?= $manufacturer['name'] ?></a></h3>
			<a href="<?= URL_SITE ?><?= $manufacturer['pagename'] ?>/" rel="nofollow">
				<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturer['filename'] ?>&w=250&h=250" class="manufacturer-image" />
			</a>
			<br class="clearall" />
		</div>
		<?php
	}
?>
