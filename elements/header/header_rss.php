<?php
	if ($pagetype == 'category')
	{
		?>
		<link href="<?= URL_SITE ?>rss/<?= PAGENAME ?>/" rel="alternate" type="application/rss+xml" title="<?=sprint_f(gTT('HEAD_RSS_CATEGORY'),SITE_NAME,$thiscategory['linktitle'])?>" />
		<?php
	}
?>
<link href="<?= URL_SITE ?>rss/all-products/" rel="alternate" type="application/rss+xml" title="<?=sprint_f(gTT('HEAD_RSS_PRODUCTS'),SITE_NAME)?>" />
<link href="<?= URL_SITE ?>rss/special-offers/" rel="alternate" type="application/rss+xml" title="<?=sprint_f(gTT('HEAD_RSS_SPECIAL_OFFERS'),SITE_NAME)?>" />
