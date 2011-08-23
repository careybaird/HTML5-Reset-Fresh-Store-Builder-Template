<div id="basket-delivery-information">
	<?php
		if ($freedelivery)
			echo 'Shipped with <strong>free Super Saver Shipping</strong>';
		else if ($supersavercount > 0)
			echo sprintf('Super Saver Shipping limit: %d', formatProductPrice($amazon->supersavershippinglimit, false));
		else
			echo 'No Super Saver Shipping';
	?>
</div>
