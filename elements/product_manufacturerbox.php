<?php
	if ($manufacturer['display'])
	{
		?>
			<div class="product-manufacturer">
				View our full range of <a href="<?= URL_SITE.$manufacturer['pagename'] ?>/"><?= $manufacturer['name'] ?></a>
			</div>
		<?php
	}
