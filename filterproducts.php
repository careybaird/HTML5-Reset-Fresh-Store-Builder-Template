<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<form action="<?= URL_SITE ?>filter-products/" method="post" class="filter-form">
	<?php
		foreach ($filteroptions as $key => $item)
		{
			if ($key === 'filterprices')
				loadTemplateElement('filterproducts', 'prices');
			else if ($key === 'filtermanufacturer')
				loadTemplateElement('filterproducts', 'manufacturers');
			else
				loadTemplateElement('filterproducts', 'general');
		}
	?>
	<input type="submit" value="<?=gTT('FILTEROPTIONS_BUTTON')?>" id="filter-form-submit" />
</form>
