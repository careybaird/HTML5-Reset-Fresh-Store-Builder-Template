<?php
	if (isset($manufacturerimage) && is_array($manufacturerimage))
	{
		?>
			<img class="manufacturer-image" src="<?= URL_SITE ?>i/?src=<?= RELATIVE_URL_IMAGES_MANUFACTURER.$manufacturerimage['filename'] ?>&w=200&h=200" />
		<?php
	}
?>
