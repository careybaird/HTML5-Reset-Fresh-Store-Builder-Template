<h1>All Categories</h1>

<?= $page['maintext'] ?>

<ul id="allcategories-list">
<?php

	foreach ($categories as $category)
	{
		?>
		<li class="allcategories-listitem-<?= $category['level'] ?>">
			<a href="<?= URL_SITE ?><?= $category['pagename'] ?>/"><?= $category['linktitle'] ?></a>
		</li>
		<?php
	}

?>
</ul>