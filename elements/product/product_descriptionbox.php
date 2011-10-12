<?php
	if (trim($product['description']) != '' || ADMIN_LOGGED_IN)
	{
		?>	
			<h2><?=sprintf(gTT('PRODUCT_DESCRIPTION'), $product['linktitle']) ?></h2>
			<div class="product-description"><?= $product['description'] ?></div>
		<?php
	}
