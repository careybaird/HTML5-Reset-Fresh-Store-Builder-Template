<?php require('elements/productlisting_filteroptions.php') ?>

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

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i = 0;
	foreach ($products as $product)
	{
		$i++;
		require('elements/productlisting_product.php');
		if ($i % 4 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		require('elements/productlisting_noproducts.php');
	}
?>
<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>

<div class="page-bottomtext category-descriptionbottom"><?= $thiscategory['descriptionbottom'] ?></div>
<br class="clearall" />
