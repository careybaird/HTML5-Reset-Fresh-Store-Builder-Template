<?php
	loadTemplateElement('productlisting', 'filteroptions');
	loadTemplateElement('category', 'images');
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('productlisting', 'options');
	loadTemplateElement('productlisting', 'previousnext');

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

<div id="page-bottomtext" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
