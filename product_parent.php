<div class="product product-full product-parent">

	<h2 id="page-title" class="product-title<?= ($manufacturer['display'] ? ' product-title-manufacturer' : '') ?>"><?= $product['title'] ?></h2>
	<div class="clearall"></div>

	<?php
		require_once('elements/product_pricebox.php');
		require_once('elements/product_imagebox.php');
		require_once('elements/product_descriptionbox.php');
		require_once('elements/product_azdescriptionbox.php');
		require_once('elements/product_reviewbox.php');
		require_once('elements/product_attributesbox.php');
		require_once('elements/product_secondarydescriptionbox.php');
		require_once('elements/product_manufacturerbox.php');
	?>
	
</div>
