<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<form action="<?= URL_SITE ?>filter-products/" method="post" class="filter-form">
	<?php
		foreach ($filteroptions as $key => $item)
		{
			if ($key === 'filterprices')
				require('elements/filterproducts/filterproducts_prices.php');
			else if ($key === 'filtermanufacturer')
				require('elements/filterproducts/filterproducts_manufacturers.php');
			else
				require('elements/filterproducts/filterproducts_general.php');
		}
	?>
	<input type="submit" value="Filter Products" id="filter-form-submit" />
</form>
