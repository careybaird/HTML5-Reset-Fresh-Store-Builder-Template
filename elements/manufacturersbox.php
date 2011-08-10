<?php
	if (sizeof($manufacturers) > 0)
	{
		?>
			<div id="home-manufacturers" class="home-box">
				<?php
					foreach ($manufacturers as $manufacturer)
					{
						?>
						<a href="<?= URL_SITE.$manufacturer['pagename'] ?>/">
							<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturer['logo']['filename'] ?>&w=150&h=80" />
						</a>
						<?php
					}
				?>
				<p><a href="<?= URL_SITE ?><?= $pages['allmanufacturers']['pagename'] ?>/"><?= gTT('HOMEPAGE_VIEWBRANDS') ?></a></p>
			</div>
			<br class="clearall" />
		<?php	
	}
?>
