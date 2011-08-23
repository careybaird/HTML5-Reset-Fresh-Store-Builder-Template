<?php require('elements/productlisting/productlisting_filteroptions.php') ?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['description'] ?></div>
<div class="clearall"></div>

<?php require('elements/productlisting/productlisting_options.php') ?>
<?php require('elements/productlisting/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		loadTemplateElement('productlisting', 'product');
		clearAll($i);
	}
	
	if ($i == 0)
		require('elements/productlisting/productlisting_noproducts.php');
?>
<div class="clearall"></div>

<?php require('elements/productlisting/productlisting_previousnext.php') ?>

<div id="page-bottomtext"><?= $page['descriptionbottom'] ?></div>
