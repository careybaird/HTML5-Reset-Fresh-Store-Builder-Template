<div id="content-narrow">

<?php require('elements/productlisting_filteroptions.php') ?>

<div id="rss-icon">
	<a href="<?= URL_SITE ?>rss/all-products/">
		<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/rss.png" width="30px" />
	</a>
</div>

<h1 id="category-title"><?= $page['title'] ?></h1>

<div id="category-description"><?= $page['description'] ?></div>

<br class="clearall" />


<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>


<?php
	$i=0;
	foreach ($products as $product)
	{
		$i++;
		
		require('elements/productlisting_product.php');
		
		if ($i % 4 == 0) echo '<br class="clearall" />';
	}
	
	if ($i == 0)
	{
		?>
		<p>Sorry, we currently have no available products here. Please check the categories to the left.</p>
		<?php
	}
	
?>

<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>

<div id="category-descriptionbottom"><?= $page['descriptionbottom'] ?></div>

<br class="clearall" />

</div>


<br class="clearall" />