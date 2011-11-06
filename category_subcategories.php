<?php
	loadTemplateElement('category', 'images');
	loadTemplateElement('category', 'titles', array('thiscategory' => $thiscategory));
?>

<div class="category-listing">
	<?php
		$i = 0;
		foreach ($subcategories as $subcategory)
		{
			$i++;
			loadTemplateElement('categorylisting', 'category', array('subcategory' => $subcategory));
			clearAll($i, CATEGORYLISTING_ROW_COUNT);
		}
	
		if ($i == 0)
			loadTemplateElement('categorylisting', 'nocategories');
	?>
</div>

<div id="category-descriptionbottom" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
