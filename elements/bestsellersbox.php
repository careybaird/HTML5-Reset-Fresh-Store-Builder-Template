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
