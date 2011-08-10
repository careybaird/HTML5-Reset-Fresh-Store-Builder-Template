<div id="product-image-box">
	<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_500.jpg" title="<?= $product['title'] ?>">
		<img class="product-image" src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_250.jpg" alt="<?= $product['title'] ?>" />
	</a>

	<?php
		if (sizeof($images) > 0) 
		{
			echo '<span class="image-enlarge">Click images to enlarge</span>';
			foreach ($images as $image)
			{
				?>
					<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_500.jpg" title="<?= $product['title'] ?>">
						<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $image['id'] ?>_50.jpg" class="image-thumbnail" />
					</a>				
				<?php
			}
		}
	?>
	<br class="clearall" />
</div>
