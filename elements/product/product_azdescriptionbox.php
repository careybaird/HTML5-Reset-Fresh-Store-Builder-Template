<?php
	if (trim($amazoncontent['description']) != '' && PRODUCT_INFO_DISPLAY_AZDESC != '0')
	{
		?>
			<h3 class="product-azdescription-title product-subtitle"><?=gTT('PRODUCT_DESCRIPTION_MANUFACTURER')?></h3>
			<div class="product-description" id="product-azdescription"><?= $amazoncontent['description'] ?></div>
		<?php
	}
