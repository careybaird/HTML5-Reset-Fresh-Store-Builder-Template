<?php
	require('elements/category_images.php');
?>

<h2 id="page-title" class="category-title"><?= $thiscategory['title'] ?></h2>
<div id="page-maintext" class="category-description"><?= $thiscategory['description'] ?></div>
<div class="clearall"></div>

<?php
	$i = 0;
	foreach ($subcategories as $subcategory)
	{
		$i++;
		?>
		<div class="category-listing-box">
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><img src="<?= URL_SITE ?>img/<?= $subcategory['pagename'] ?>_<?= $subcategory['productimage']['id'] ?>_110.jpg" alt="<?= $subcategory['title'] ?>" title="<?= $subcategory['title'] ?>" class="category-image" /></a>
			<h3 class="category-title subcategory-title"><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><?= $subcategory['title'] ?></a></h3>
			<div class="product-count"><?= $subcategory['productcount'] ?> products in stock.</div>
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>" rel="nofollow" class="viewall">View All</a>
		</div>
		<?php
		clearAll($i, CATEGORYLISTING_ROW_COUNT);
	}
	
	if ($i == 0)
		require('elements/productlisting_noproducts.php');
?>

<div id="category-descriptionbottom" class="category-description"><?= $thiscategory['descriptionbottom'] ?></div>
