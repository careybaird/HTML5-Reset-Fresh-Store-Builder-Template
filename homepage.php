<?php
	require_once('elements/manufacturersbox.php');
?>

<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>
<br class="clearall" />

<?php
	if(count($reducedproducts) > 0)
	{
		?>
		<div class="home-specialoffers home-box">
			<h3 class="page-subtitle"><a href="<?= $pages['specialoffers']['pagename'] ?>/"><?= $pages['specialoffers']['linktitle'] ?></a></h3>
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
		<?php
	}
?>

<?php
	if(count($topproducts) > 0)
	{
		?>
		<div class="home-bestsellers home-box">
			<h3 class="page-subtitle"><a href="<?= $pages['bestsellers']['pagename'] ?>/"><?= $pages['bestsellers']['linktitle'] ?></a></h3>
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
		<?php
	}
?>
