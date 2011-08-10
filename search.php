<?php require('elements/productlisting_filteroptions.php') ?>

<h2 class="page-title"><?= sprintf(gtt('SEARCH_RESULTSFOR'), $keywords) ?></h2>

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($results as $product)
	{
		$i++;
		require('elements/productlisting_product.php');
		if ($i % 4 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>

<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>
