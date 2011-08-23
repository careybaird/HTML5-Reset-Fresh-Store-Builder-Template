<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	if (!$amazon->cart || sizeof($amazon->cart['items']) == 0)
		loadTemplateElement('cart', 'empty');
	else
	{
		loadTemplateElement('cart', 'products');
		loadTemplateElement('cart', 'delivery');
		loadTemplateElement('cart', 'checkoutlink');
	}
?>
