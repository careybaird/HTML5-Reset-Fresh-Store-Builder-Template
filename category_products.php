<?php
	require('elements/productlisting_filteroptions.php');
	require('elements/category_images.php');
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<?php
	require('elements/productlisting_options.php');
	require('elements/productlisting_previousnext.php');
?>

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
<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>

<div id="page-bottomtext" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
