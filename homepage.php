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

<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>
<br class="clearall" />

<div id="home-specialoffers" class="home-box">
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
	<div class="viewall">View all <a rel="nofollow" href="<?= $pages['specialoffers']['pagename'] ?>/">Special Offers</a></div>
</div>

<div id="home-bestsellers" class="home-box">
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
	<div class="viewall">View all <a rel="nofollow" href="<?= $pages['bestsellers']['pagename'] ?>/">Best Sellers</a></div>
</div>
