<?php
	if (sizeof ($categoryimages) > 0)
	{
		?>
		<div class="category-image">
			<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_CATEGORY.$categoryimages[0]['filename'] ?>&w=200&h=200" alt="<?= $categoryimages[0]['alt'] ?>" title="<?= $categoryimages[0]['title'] ?>" />
		</div>
		<?php
	}
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
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><img src="<?= URL_SITE ?>img/<?= $subcategory['pagename'] ?>_<?= $subcategory['productimage']['id'] ?>_110.jpg" alt="<?= $subcategory['title'] ?>" title="<?= $subcategory['title'] ?>" /></a>
			<h3 class="category-title"><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><?= $subcategory['title'] ?></a></h3>
			<p><?= $subcategory['productcount'] ?> products in stock.</p>
			<p><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>" rel="nofollow">View All</a></p>
			
		</div>
		<?php
		
		if ($i % 2 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		?>
		<p>Sorry, we currently have no available products in this category. Please check the other categories to the left.</p>
		<?php
	}
?>

<div id="category-descriptionbottom"><?= $thiscategory['descriptionbottom'] ?></div>

<br class="clearall" />



<br class="clearall" />
