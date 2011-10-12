<h2 id="page-title"><?= $page['title'] ?> - <?=ucwords(gTT('PAGE'))?> <?= $pagination['currentpage'] ?> <?=gTT('OF')?> <?= $pagination['pages'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>

<?php if($pagination['currentpage'] == 1) { ?>

<h3 class="page-subtitle"><?=gTT('SITEMAP_PAGES')?></h3>
<ul class="sitemap-list sitemap-pages">
	<?php
		foreach ($sitemappages as $page)
		{
			?>
			<li class="sitemap-item"><a href="<?= URL_SITE ?><?= $page['pagename'] ?>/"><?= $page['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>

<h3 class="page-subtitle"><?=gTT('SITEMAP_CATEGORIES')?></h3>
<ul class="sitemap-list sitemap-categories">
	<?php
		foreach ($categories as $category)
		{
			?>
			<li class="sitemap-item"><a href="<?= URL_SITE ?><?= $category['pagename'] ?>/"><?= $category['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>
<?php } ?>

<h3 class="page-subtitle"><?=gTT('SITEMAP_PRODUCTS')?></h3>
<ul class="sitemap-list sitemap-products">
	<?php
		foreach ($products as $product)
		{
			?>
			<li class="sitemap-item"><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/"><?= $product['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>

<?php loadTemplateElement('page', 'previousnext', array('pagination' => $pagination)); ?>
