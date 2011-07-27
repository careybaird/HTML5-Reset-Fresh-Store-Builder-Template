<div id="breadcrumb">
<?php
	foreach($breadcrumb as $crumb)
	{
		?>
			<div class="breadcrumb-line">
				<?php
				$i = 0;
				foreach($crumb as $item)
					if ($item['url'])
						echo "<a href=\"{$item['url']}" class="breadcrumb-item breadcrumb-level-<?=$i?>\">{$item['name']}</a> >";
					else
						echo "<span class=\"breadcrumb-item breadcrumb-level-{$i}\">{$item['name']}</a>";
				?>
			</div>
		<?php
	}
?>
</div>
