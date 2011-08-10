<h2 class="page-title product-title"><?= $product['title'] ?> Reviews</h1>

<?php
	require_once('elements/product_pricebox.php');
	require_once('elements/product_imagebox.php');
?>

<iframe name="inlineframe" src="<?= $product['reviewiframelink'] ?>" frameborder="0" scrolling="auto" width="700" height="2000" marginwidth="5" marginheight="5" ></iframe>
