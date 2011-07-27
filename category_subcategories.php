
<?php
	if (sizeof ($categoryimages) > 0)
	{
		?>
		<div id="category-image">
		<img src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_CATEGORY.$categoryimages[0]['filename'] ?>&w=200&h=200" alt="<?= $categoryimages[0]['alt'] ?>" title="<?= $categoryimages[0]['title'] ?>" />
		</div>
		<?php
	}
?>

<h1 id="category-title"><?= $thiscategory['title'] ?></h1>

<div id="category-description"><?= $thiscategory['description'] ?></div>

<br class="clearall" />


<?php
	$i=0;
	foreach ($subcategories as $subcategory)
	{
		$i++;
		?>
		<div class="category-listing-box"<?= ($i % 2 == 0 ? ' style="margin-right: 0;"' : '') ?>>
			<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>">
			<img src="<?= URL_SITE ?>img/<?= $subcategory['pagename'] ?>_<?= $subcategory['productimage']['id'] ?>_110.jpg" alt="<?= $subcategory['title'] ?>" title="<?= $subcategory['title'] ?>" />
			</a>
			<h3><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><?= $subcategory['title'] ?></a></h3>
			
			<?php
			/*
			
			From <span class="price"><?= formatProductPrice($subcategory['minprice']) ?></span> to <span class="price"><?= formatProductPrice($subcategory['maxprice']) ?></span><br />
			
			*/
			?>
			
			
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