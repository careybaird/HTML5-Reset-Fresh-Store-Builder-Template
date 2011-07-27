<div id="rss-icon">
	<a href="<?= URL_SITE ?>rss/special-offers/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/rss.png" width="30px" />
	</a>
</div>

<h1><?= $page['title'] ?></h1>

<br class="clearall" />


<?php
	$i=0;
	foreach ($products as $product)
	{
		$i++;
		
		require('elements/productlisting_product.php');
		
		if ($i % 4 == 0) echo '<br class="clearall" />';
	}
?>

<br class="clearall" />

<?= $page['description'] ?>