<?php
	if ($manufacturer['display'])
	{
		?>
			<div class="product-manufacturer">
				<?=sprintf(gTT('PRODUCT_MANUFACTURER_LINK'), "<a href=\"".URL_SITE.$manufacturer['pagename']."/\">{$manufacturer['name']}</a>")?>
			</div>
		<?php
	}
