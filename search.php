<?php require('elements/productlisting_filteroptions.php') ?>

<h2 id="page-title"><?= sprintf('Search Results for %s', $keywords) ?></h2>
<div class="clearall"></div>

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($results as $product)
	{
		$i++;
		require('elements/productlisting_product.php');
		clearAll($i);
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>

<div class="clearall"></div>

<?php require('elements/productlisting_previousnext.php') ?>
