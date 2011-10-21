<?php
	if (trim($product['descriptionsecondary']) != '' || ADMIN_LOGGED_IN)
	{
		?>	
			<div id="product-secondarydescription" class="product-description"><?= $product['descriptionsecondary'] ?></div>
		<?php
	}
