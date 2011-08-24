<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['description'] ?></div>
<div class="clearall"></div>

<?php
	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		loadTemplateElement('productlisting', 'product', array('i' => $i, 'product' => $product));
		clearAll($i);
	}
	
	if ($i == 0)
		loadTemplateElement('productlisting', 'noproducts');
?>
<div class="clearall"></div>
