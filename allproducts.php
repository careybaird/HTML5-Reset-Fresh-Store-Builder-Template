<?php require('elements/productlisting_filteroptions.php') ?>

<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['description'] ?></div>
<br class="clearall" />

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

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

<div class="page-bottomtext"><?= $page['descriptionbottom'] ?></div>
