<?php loadTemplateElement('productlisting', 'filteroptions'); ?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['description'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('productlisting', 'options');
	loadTemplateElement('productlisting', 'previousnext');
?>

<?php
	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		loadTemplateElement('productlisting', 'product');
		clearAll($i);
	}
	
	if ($i == 0)
		loadTemplateElement('productlisting', 'noproducts');
?>
<div class="clearall"></div>

<?php loadTemplateElement('productlisting', 'previousnext'); ?>

<div id="page-bottomtext"><?= $page['descriptionbottom'] ?></div>
