<div id="content-narrow">

<?php require('elements/productlisting_filteroptions.php') ?>

<h2 class="page-title category-title"><?= $page['title'] ?></h2>
<div class="category-description"><?= $page['description'] ?></div>

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

<div class="category-descriptionbottom"><?= $page['descriptionbottom'] ?></div>
<br class="clearall" />

</div>

<br class="clearall" />
