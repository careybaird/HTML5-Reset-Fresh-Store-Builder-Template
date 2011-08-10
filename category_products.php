<?php
	require('elements/productlisting_filteroptions.php');
	require('elements/category_images.php');
?>

<h2 class="page-title category-title"><?= $thiscategory['title'] ?></h2>
<div class="page-maintext category-description"><?= $thiscategory['description'] ?></div>
<br class="clearall" />

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
		if ($i % 4 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>
<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>

<div class="page-bottomtext category-descriptionbottom"><?= $thiscategory['descriptionbottom'] ?></div>
