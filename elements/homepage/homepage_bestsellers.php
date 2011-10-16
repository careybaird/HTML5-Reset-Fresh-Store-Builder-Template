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
					loadTemplateElement('productlisting', 'product', array('i' => $i, 'product' => $product));
					clearAll($i);
				}
			?>
			<div class="viewall"><?=gTT('HOME_VIEW_ALL')?> <a rel="nofollow" href="<?= $pages['bestsellers']['pagename'] ?>/"><?= $pages['bestsellers']['linktitle'] ?></a></div>
		</div>
		<?php
	}
?>
