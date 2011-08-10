<div class="product product-full">

	<h2 class="page-title product-title"><?= $product['title'] ?></h2>
	<br class="clearall" />

	<?php
		require_once('elements/product_pricebox.php');
		require_once('elements/product_imagebox.php');
		require_once('elements/product_descriptionbox.php');
		//require_once('elements/product_azdescriptionbox.php');
		require_once('elements/product_reviewbox.php');
		require_once('elements/product_attributesbox.php');
		require_once('elements/product_secondarydescriptionbox.php');
		require_once('elements/product_manufacturerbox.php');
	?>

</div>
