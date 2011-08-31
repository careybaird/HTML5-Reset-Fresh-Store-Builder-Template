<?php
	loadTemplateElement('category', 'images');
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<div class="category-listing">
	<?php
		$i = 0;
		foreach ($subcategories as $subcategory)
		{
			$i++;
			loadTemplateElement('categorylisting', 'category');
			clearAll($i, CATEGORYLISTING_ROW_COUNT);
		}
	
		if ($i == 0)
			loadTemplateElement('categorylisting', 'nocategories');
	?>
</div>

<div id="category-descriptionbottom" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
