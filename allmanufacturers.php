<h1><?= $page['title'] ?></h1>

<?php
	foreach ($manufacturers as $manufacturer)
	{
		?>
		<div class="manufacturer-box">
			<h2><a href="<?= URL_SITE ?><?= $manufacturer['pagename'] ?>/"><?= $manufacturer['name'] ?></a></h2>
			<a href="<?= URL_SITE ?><?= $manufacturer['pagename'] ?>/" rel="nofollow">
				<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturer['filename'] ?>&w=250&h=250" />
			</a>
			<br class="clearall" />
		</div>
		<?php
	}
?>