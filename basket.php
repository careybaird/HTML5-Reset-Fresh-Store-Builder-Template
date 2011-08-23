<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	if (!$amazon->cart || sizeof($amazon->cart['items']) == 0)
		require('elements/cart/cart_empty.php');
	else
	{
		require('elements/cart/cart_products.php');
		require('elements/cart/cart_delivery.php');
		require('elements/cart/cart_checkoutlink.php');
	}
?>
