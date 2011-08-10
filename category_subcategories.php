<?php
	require('elements/category_images.php');
?>

<h2 class="page-title category-title"><?= $thiscategory['title'] ?></h2>
<div class="page-maintext category-description"><?= $thiscategory['description'] ?></div>
<br class="clearall" />

<?php
	$i = 0;
	foreach ($subcategories as $subcategory)
	{
		$i++;
		?>
		<div class="category-listing-box">
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><img src="<?= URL_SITE ?>img/<?= $subcategory['pagename'] ?>_<?= $subcategory['productimage']['id'] ?>_110.jpg" alt="<?= $subcategory['title'] ?>" title="<?= $subcategory['title'] ?>" class="category-image" /></a>
			<h3 class="category-title"><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><?= $subcategory['title'] ?></a></h3>
			<div class="product-count"><?= $subcategory['productcount'] ?> products in stock.</div>
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>" rel="nofollow" class="category-link">View All</a>
		</div>
		<?php
		if ($i % 2 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>

<div id="category-descriptionbottom"><?= $thiscategory['descriptionbottom'] ?></div>
