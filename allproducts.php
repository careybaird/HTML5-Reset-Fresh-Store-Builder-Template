<?php require('elements/productlisting_filteroptions.php') ?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		require('elements/productlisting_product.php');
		if ($i % PRODUCTLISTING_ROW_COUNT == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>
<div class="clearall"></div>

<?php require('elements/productlisting_previousnext.php') ?>

<div id="page-bottomtext"><?= $page['descriptionbottom'] ?></div>
