<?php require('elements/productlisting_filteroptions.php') ?>

<?php
	if (isset($manufacturerimage) && is_array($manufacturerimage))
	{
		?>
			<img id="manufacturer-logo" src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturerimage['filename'] ?>&w=200&h=200" />
		<?php
	}
?>

<h2 class="page-title" id="manufacturer-pageheading"><?= $manufacturer['pageheading'] ?></h2>

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
?>

<br class="clearall" />

<?php require('elements/productlisting_previousnext.php') ?>

<div id="manufacturer-description"><?= $manufacturer['description'] ?></div>
