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
					require('productlisting_product.php');
					clearAll($i);
				}
			?>
			<div class="viewall">View all <a rel="nofollow" href="<?= $pages['specialoffers']['pagename'] ?>/">Special Offers</a></div>
		</div>
		<?php
	}
?>
