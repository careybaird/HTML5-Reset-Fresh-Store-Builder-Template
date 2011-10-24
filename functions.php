<?php

	// Clears floats if loop is at the end of a row
	function clearAll($i, $break = PRODUCTLISTING_ROW_COUNT)
	{
		if(!is_numeric($break)) $break = 4;
		if ($i % $break == 0) echo '<div class="clearall"></div>';
	}
	
	// Loads a template file, right now it's just a require but in the future it will look to parent template(s) if necessary
	// A similar function will need to be available for controllers to access the main template files
	if(!is_defined('loadTemplateElement')) function loadTemplateElement($type, $name, $variables = array())
	{
		foreach ($variables as $key => $item)
		{
			# Defined here so they are in scope
			$$key = $item;
		}
		
		require PATH_TEMPLATES.TEMPLATE_FOLDER."/elements/{$type}/{$type}_{$name}.php";
	}
	
	// Logic to determine the product price
	function getProductPrice($product, $offer = array())
	{
		if ($offer && $offer['price'] > 0)
			return $offer['priceformatted'];
		else if ($offer && $offer['price'] == 0)
			return gTT('PRODUCT_PRICE_INCART');
		else if ($product['price'] > 0 && $product['expired'] == 0)
			return $product['priceformatted'];
		else
			return gTT('PRODUCT_PRICE_NOTAVAIL');
	}
	
	// Logic to determine a products availability
	function getProductAvailability($product, $offer = array())
	{
		if ($offer && $offer['price'] == 0)
			echo gTT('PRODUCT_AVAIL_NOPRICE');	

		if ($offer['isreduced'])
			echo '<div class="product-savings">',sprintf(gTT('PRODUCT_AVAIL_SAVINGS'), $offer['percentagesaved']),'</div>';
		
		if ($offer['ispreorder'])
			echo '<div id="product-preorder">',gTT('PRODUCT_AVAIL_PREORDER'),'</div>';
		
		if ($offer['availabilitytext'])
			echo "<div class=\"product-availability\">{$offer['availabilitytext']}</div>";

		if ($offer && $offer['supersavershipping'])
			if ($offer['priceraw'] > ($amazon->supersavershippinglimit - 10))
				echo '<div class="product-shipping">',gTT('PRODUCT_SHIPPING_FREE'),'</div>';
			else
				echo '<div class="product-shipping">',sprintf(gTT('PRODUCT_SHIPPING_QUALIFIES'),formatProductPrice($amazon->supersavershippinglimit)),'</div>';
		else if ($product['expired'] == 0)
			echo '<div class="product-shipping">',gTT('PRODUCT_SHIPPING_NONFREE'),'</div>';

		if ($offer && $offer['quantity'] > 0 && $offer['quantity'] < 5)
			echo '<div class="product-lowstock">',sprintf(gTT('PRODUCT_STOCK_LOW'), $offer['quantity']),'</div>';
	}
