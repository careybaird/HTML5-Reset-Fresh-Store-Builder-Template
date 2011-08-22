<?php
	require('elements/productlisting_filteroptions.php');
	require('elements/manufacturer_images.php');
?>

<h2 id="page-title" class="manufacturer-title"><?= $manufacturer['pageheading'] ?></h2>
<div id="page-maintext" class="manufacturer-description"><?= $manufacturer['description'] ?></div>
<div class="clearall"></div>

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($products as $product)
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
