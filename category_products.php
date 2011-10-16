<?php
	loadTemplateElement('productlisting', 'filteroptions', array('currentproductfilters' => $currentproductfilters));
	loadTemplateElement('category', 'images', array('categoryimages' => $categoryimages));
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('productlisting', 'options', array('pagination' => $pagination));
	loadTemplateElement('productlisting', 'previousnext', array('pagination' => $pagination));
?>

<div class="product-listing">
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
</div>

<?php loadTemplateElement('productlisting', 'previousnext', array('pagination' => $pagination)); ?>

<div id="page-descriptionbottom" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
