<?php
	if (trim($product['descriptionsecondary']) != '' || ADMIN_LOGGED_IN)
	{
		?>	
			<div id="product-description product-secondarydescription"><?= $product['descriptionsecondary'] ?></div>
		<?php
	}
