<?php
	require('elements/productlisting/productlisting_filteroptions.php');
	require('elements/category/category_images.php');
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<?php
	require('elements/productlisting/productlisting_options.php');
	require('elements/productlisting/productlisting_previousnext.php');

	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		require('elements/productlisting/productlisting_product.php');
		clearAll($i);
	}
	
	if ($i == 0)
		require('elements/productlisting/productlisting_noproducts.php');
?>
<div class="clearall"></div>

<?php require('elements/productlisting/productlisting_previousnext.php') ?>

<div id="page-bottomtext" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
