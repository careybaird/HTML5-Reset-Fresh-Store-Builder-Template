<h1><?= $page['title'] ?> - Page <?= $pagination['currentpage'] ?> of <?= $pagination['pages'] ?></h1>

<?= $page['maintext'] ?>

<? if($pagination['currentpage']==1){?>
<h2>Main Pages</h2>

<ul>
	<?php
		foreach ($sitemappages as $page)
		{
			?>
			<li><a href="<?= URL_SITE ?><?= $page['pagename'] ?>/"><?= $page['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>


<h2>Shop Categories</h2>

<ul>
	<?php
		foreach ($categories as $category)
		{
			?>
			<li><a href="<?= URL_SITE ?><?= $category['pagename'] ?>/"><?= $category['linktitle'] ?></a></li>
			<?php
		}
	?>
</ul>
<? } ?>
<h2>Products</h2>

<ul>
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

   