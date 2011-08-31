<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<div class="category-listing">
	<?php
		$i = 0;
		foreach ($categories as $category)
		{
			$i++;
			loadTemplateElement('categorylisting', 'category');
			clearAll($i, CATEGORYLISTING_ROW_COUNT);
		}
		
		if ($i == 0)
			loadTemplateElement('categorylisting', 'nocategories');
	?>
</div>
