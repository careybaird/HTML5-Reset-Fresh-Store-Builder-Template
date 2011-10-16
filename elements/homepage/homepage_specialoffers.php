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
					loadTemplateElement('productlisting', 'product', array('i' => $i, 'product' => $product));
					clearAll($i);
				}
			?>
			<div class="viewall"><?=gTT('HOME_VIEW_ALL')?> <a rel="nofollow" href="<?= $pages['specialoffers']['pagename'] ?>/"><?= $pages['specialoffers']['linktitle'] ?></a></div>
		</div>
		<?php
	}
?>
