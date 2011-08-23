<?php
	if (sizeof($leftmenumanufacturers) > 0)
	{
		?>
			<div class="menu-left-header">
				<h4>Browse Brands</h4>
			</div>
			
			<div class="menu-left-contents">
			<ul>
				<?php									
				foreach ($leftmenumanufacturers as $leftmanufacturer)
				{
					?>
					<li><a href="<?= URL_SITE ?><?= $leftmanufacturer['pagename'] ?>/"><?= $leftmanufacturer['linktitle'] ?></a></li>
					<?php
				}
				?>
			</ul>
			</div>
		<?php
	}
?>
