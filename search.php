<?php loadTemplateElement('productlisting', 'filteroptions', array('currentproductfilters' => $currentproductfilters)); ?>

<h2 id="page-title"><?= sprintf(gTT('SEARCH_RESULTSFOR'), $keywords) ?></h2>
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
			loadTemplateElement('productlisting', 'noproducts', array('text' => sprintf(gTT('SEARCH_NORESULTS'), $keywords)));
	?>
	<div class="clearall"></div>
</div>

<?php loadTemplateElement('productlisting', 'previousnext', array('pagination' => $pagination)); ?>
