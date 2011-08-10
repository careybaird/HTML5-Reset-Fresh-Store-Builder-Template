<h2 class="page-title product-title"><?= $product['title'] ?> Reviews</h2>

<?php
	require_once('elements/product_pricebox.php');
	require_once('elements/product_imagebox.php');
?>

<iframe name="inlineframe" src="<?= htmlspecialchars($product['reviewiframelink']) ?>" width="700" height="2000"></iframe>
