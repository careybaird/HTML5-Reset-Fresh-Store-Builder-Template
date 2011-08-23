<?php
	foreach ($leftmenucategories as $categorygroup)
	{
		if (sizeof($categorygroup['categories']) == 0) continue;
		?>
		<div class="menu-left-header">
			<h4><?= $categorygroup['name'] ?></h4>
		</div>
		
		<div class="menu-left-contents">
			<ul>
				<?php
					foreach ($categorygroup['categories'] as $leftcategory)
					{
						?>
						<li class="level-<?= $leftcategory['level'].($current_category_id == $leftcategory['id'] ? ' selected' : '') ?>">
							<a class="<?= (PAGENAME == $leftcategory['pagename'] ? 'selected' : '') ?>" href="<?= URL_SITE ?><?= $leftcategory['pagename'] ?>/"><?= $leftcategory['linktitle'] ?></a>
						</li>
						<?php
					}
				?>
				<li class="level-0"><a href="<?= URL_SITE ?><?= $pages['allproducts']['pagename'] ?>/" class="<?= (PAGENAME == $pages['allproducts']['pagename'] ? 'selected' : 'allproducts') ?>"><?= $pages['allproducts']['linktitle'] ?></a></li>
			</ul>
		</div>
		
		<?php
	}
?>
