<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<ul class="categories-list">
	<?php
		foreach ($categories as $category)
		{
			?>
			<li class="categories-item-<?= $category['level'] ?>">
				<a href="<?= URL_SITE ?><?= $category['pagename'] ?>/" class="category-link"><?= $category['linktitle'] ?></a>
			</li>
			<?php
		}
	?>
</ul>
