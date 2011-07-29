<?php require('elements/productlisting_filteroptions.php') ?>

<h2 class="page-title"><?= sprintf(gtt('SEARCH_RESULTSFOR'), $keywords) ?></h2>

<?php require('elements/productlisting_options.php') ?>
<?php require('elements/productlisting_previousnext.php') ?>

<?php
	$i=0;
	if (sizeof($results) > 0)
	{
		foreach ($results as $product)
		{
			$i++;
			
			require('elements/productlisting_product.php');
			
			if ($i % 4 == 0) echo '<br class="clearall" />';
		}
	}
	else
	{
		?>
		<p><?= sprintf(gtt('SEARCH_NORESULTS'), $keywords) ?></p>
		<?php
	}
?>

<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>
