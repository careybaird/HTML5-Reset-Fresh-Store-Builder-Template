<?php
	if (sizeof($product['keyfeatures']) > 0 && $product['keyfeatures'][0] != '')
	{
		?>
			<h3 class="product-features-title product-subtitle">Product Features</h3>
		
			<ul class="product-list product-features">
				<?php
				$product['keyfeatures'] = explode("\n",$product['keyfeatures']);
				foreach($product['keyfeatures'] as $feature)
				{
					?>
					<li class="product-feature product-list-item"><?= $feature ?></li>
					<?php
				}
				?>
			</ul>
		
		<?php
	}
