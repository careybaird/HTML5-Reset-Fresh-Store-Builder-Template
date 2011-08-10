<h2 class="page-title"><?= $page['title'] ?> - Page <?= $pagination['currentpage'] ?> of <?= $pagination['pages'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<?php if($pagination['currentpage'] == 1) { ?>

<h3 class="page-subtitle">Main Pages</h3>
<ul class="sitemap-list sitemap-pages">
	<?php
		foreach ($sitemappages as $page)
		{
			?>
			<li><a href="<?= URL_SITE ?><?= $page['pagename'] ?>/"><?= $page['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>

<h3 class="page-subtitle">Shop Categories</h3>
<ul class="sitemap-list sitemap-categories">
	<?php
		foreach ($categories as $category)
		{
			?>
			<li><a href="<?= URL_SITE ?><?= $category['pagename'] ?>/"><?= $category['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>
<?php } ?>

<h3 class="page-subtitle">Products</h3>
<ul class="sitemap-list sitemap-products">
	<?php
		foreach ($products as $product)
		{
			?>
			<li><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/"><?= $product['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>

<?php require('elements/page_previousnext.php') ?>   
