	<br class="clearall" />

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
		<div class="clearall"></div>
		<p>View all <a rel="nofollow" href="<?= $pages['specialoffers']['pagename'] ?>/">Special Offers</a></p>
	</div>


	<div id="home-bestsellers">
		<h2><a href="<?= $pages['bestsellers']['pagename'] ?>/"><?= $pages['bestsellers']['linktitle'] ?></a></h2>
		
		<?php
			foreach ($topproducts as $product)
			{
				?>
				<div class="homepage-bestseller">
					<a class="title" href="<?= URL_SITE.$product['pagename'] ?>/">
						<?= substr($product['linktitle'], 0, 40).(strlen($product['linktitle']) > 40 ? '...' : '') ?>
					</a><br />
					<a href="<?= URL_SITE.$product['pagename'] ?>/" rel="nofollow">
						<img class="product" src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $product['image']['id'] ?>_90.jpg" />
					</a>
					<br />
					<?php
					if ($product['originalprice'] > $product['price'])
					{
						?>
						<span class="oldprice"><?= formatProductPrice($product['originalprice']) ?></span>
						<?php
					}
					?>
					<span class="price"><?= formatProductPrice($product['price']) ?></span><br /><br />
					
					<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/">
						<?= getTemplateImage('BUTTON_VIEW_PRODUCT') ?>
					</a>
					<br />
					<?php
						if ($product['offer'])
						{
							?>
							<a rel="nofollow" href="<?= URL_SITE ?>basket/add/<?= $product['id'] ?>/<?= $product['offer']['id'] ?>/">
							<?php
						}
						else
						{
							?>
							<a rel="nofollow" href="<?= URL_SITE.$product['pagename'] ?>/">
							<?php
						}
					?>
						<?= getTemplateImage('BUTTON_ADD_BASKET') ?>
					</a>
					
					<br class="clearall" />
				</div>
				<?php
			}
		?>
		
		<p>View all <a rel="nofollow" href="<?= $pages['bestsellers']['pagename'] ?>/">Best Sellers</a></p>
	</div>
