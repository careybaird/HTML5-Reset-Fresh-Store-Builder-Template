<div id="basket-delivery-information">
	<?php
		if ($freedelivery)
			echo gTT('BASKET_SHIPPINGTEXT_FREE');
		else if ($supersavercount > 0)
			echo sprintf(gTT('BASKET_SHIPPINGTEXT_PARTSUPERSAVER'), formatProductPrice($amazon->supersavershippinglimit, false));
		else
			echo gTT('BASKET_SHIPPINGTEXT_NOSUPERSAVER');
	?>
</div>
