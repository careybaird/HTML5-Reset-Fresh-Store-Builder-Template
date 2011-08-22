<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<ul class="categories-list">
	<?php
		foreach ($categories as $category)
		{
			?>
			<li class="categories-item categories-item-<?= $category['level'] ?>">
				<a href="<?= URL_SITE ?><?= $category['pagename'] ?>/" class="category-link"><?= $category['linktitle'] ?></a>
			</li>
			<?php
		}
	?>
</ul>
