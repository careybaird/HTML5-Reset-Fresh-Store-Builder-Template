	<?php
		if (sizeof($manufacturers) > 0)
		{
			?>
				<div id="home-manufacturers">
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

	<h2><?= $page['title'] ?></h2>
	<?= $page['maintext'] ?>
	<br class="clearall" />

	<div id="home-specialoffers">
		<h2><a href="<?= $pages['specialoffers']['pagename'] ?>/"><?= $pages['specialoffers']['linktitle'] ?></a></h2>
		<?php
			$i = 0;
			foreach ($reducedproducts as $product)
			{
				$i++;
				require('elements/productlisting_product.php');
			}
		?>
		<br class="clearall" />
		<p>View all <a rel="nofollow" href="<?= $pages['specialoffers']['pagename'] ?>/">Special Offers</a></p>
	</div>


	<div id="home-bestsellers">
		<h2><a href="<?= $pages['bestsellers']['pagename'] ?>/"><?= $pages['bestsellers']['linktitle'] ?></a></h2>
		<?php
			$i = 0;
			foreach ($topproducts as $product)
			{
				$i++;
				require('elements/productlisting_product.php');
			}
		?>
		<br class="clearall" />
		<p>View all <a rel="nofollow" href="<?= $pages['bestsellers']['pagename'] ?>/">Best Sellers</a></p>
	</div>
