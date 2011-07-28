<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<ul id="allcategories-list">
<?php
	foreach ($categories as $category)
	{
		?>
		<li class="allcategories-item-<?= $category['level'] ?>">
			<a href="<?= URL_SITE ?><?= $category['pagename'] ?>/"><?= $category['linktitle'] ?></a>
		</li>
		<?php
	}
?>
</ul>
