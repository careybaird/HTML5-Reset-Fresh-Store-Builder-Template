<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['description'] ?></div>
<div class="clearall"></div>

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
