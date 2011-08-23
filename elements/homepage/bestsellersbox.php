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
					require('productlisting_product.php');
					clearAll($i);
				}
			?>
			<div class="viewall">View all <a rel="nofollow" href="<?= $pages['bestsellers']['pagename'] ?>/">Best Sellers</a></div>
		</div>
		<?php
	}
?>
