<div class="product product-full product-parent">

	<h2 id="page-title" class="product-title<?= ($manufacturer['display'] ? ' product-title-manufacturer' : '') ?>"><?= $product['title'] ?></h2>
	<div class="clearall"></div>

	<?php
		loadTemplateElement('product', 'pricebox', array('product' => $product, 'offer' => $offer));
		loadTemplateElement('product', 'imagebox', array('product' => $product, 'mainimage' => $mainimage));
		loadTemplateElement('product', 'descriptionbox', array('product' => $product));
		loadTemplateElement('product', 'azdescriptionbox', array('amazondescription' => $amazondescription));
		loadTemplateElement('product', 'reviewbox', array('product' => $product));
		loadTemplateElement('product', 'attributesbox', array('attributes' => $attributes));
		loadTemplateElement('product', 'secondarydescriptionbox', array('product' => $product));
		loadTemplateElement('product', 'manufacturerbox', array('manufacturer' => $manufacturer));
	?>
	
</div>
