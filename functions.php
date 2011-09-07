<?php

	// Clears floats if loop is at the end of a row
	function clearAll($i, $break = PRODUCTLISTING_ROW_COUNT)
	{
		if(!is_numeric($break)) $break = 4;
		if ($i % $break == 0) echo '<div class="clearall"></div>';
	}
	
	// Loads a template file, right now it's just a require but in the future it will look to parent template(s) if necessary
	// A similar function will need to be available for controllers to access the main template files
	function loadTemplateElement($type, $name, $variables = array())
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
			return 'Price shown when you add to cart';
		else if ($product['price'] > 0 && $product['expired'] == 0)
			return $product['priceformatted'];
		else
			return 'Price not available at this time';
	}
	
	// Logic to determine a products availability
	function getProductAvailability($product, $offer = array())
	{
		if ($offer && $offer['price'] == 0)
			echo '<p><small><strong>Why is the price not displayed here?</strong><br />The price is lower than the manufacturers "minimum advertised price" and we are legally not allowed to display it until it is requested. To request the price, simply click add to shopping cart below.</small></p>';	

		if ($offer['isreduced'])
			echo "<div class=\"product-savings\">Save {$offer['percentagesaved']}%!</div>";
		
		if ($offer['ispreorder'])
			echo '<div id="product-preorder">Available to Pre-order now!<br />Your card will not be charged until the item is dispatched. You will pay the lowest price this item has been available for in the Pre-order period - guaranteed.</div>';
		
		if ($offer['availabilitytext'])
			echo "<div class=\"product-availability\">{$offer['availabilitytext']}</div>";

		if ($offer && $offer['supersavershipping'])
			if ($offer['priceraw'] > ($amazon->supersavershippinglimit - 10))
				echo '<div class="product-shipping">This item ships for FREE with Super Saver Shipping.</div>';
			else
				echo '<div class="product-shipping">This item ships for <strong>FREE</strong> with Super Saver Shipping, when the order total is greater than '. formatProductPrice($amazon->supersavershippinglimit).'</div>';
		else if ($product['expired'] == 0)
			echo '<div class="product-shipping">Shipping cost is calculated during checkout.</div>';

		if ($offer && $offer['quantity'] > 0 && $offer['quantity'] < 5)
			echo "<div class=\"product-lowstock\">Only {$offer['quantity']} left in stock - order now to avoid dissapointment.</div>";
	}
	
	/* Template functions end here, general logic starts
	   This should probably be moved to somewhere else */
	
	// Generate edit and place options, this will probably require refinement
	if($product)
		$editinplacevariables = array('product' => $product);
	elseif($category)
		$editinplacevariables = array('category' => $category);
	else
		$editinplacevariables = array();
