<h2 class="page-title product-title"><?= sprintf(gTT('PRODUCT_REVIEWS'), $product['title']) ?></h2>

<?php
	loadTemplateElement('product', 'pricebox', array('product' => $product, 'offer' => $offer));
	loadTemplateElement('product', 'imagebox', array('product' => $product, 'mainimage' => $mainimage));
?>

<iframe name="inlineframe" src="<?= htmlspecialchars($product['reviewiframelink']) ?>" width="700" height="2000"></iframe>
