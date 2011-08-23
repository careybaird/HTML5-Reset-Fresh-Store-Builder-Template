<?php
	if ($pagetype == 'category')
	{
		?>
		<link href="<?= URL_SITE ?>rss/<?= PAGENAME ?>/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Products in category <?= $thiscategory['linktitle'] ?>" />
		<?php
	}
?>
<link href="<?= URL_SITE ?>rss/all-products/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Products" />
<link href="<?= URL_SITE ?>rss/special-offers/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Special Offers" />
