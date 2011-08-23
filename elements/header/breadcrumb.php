<div id="breadcrumb">
<?php
	/*
	* 	How you want to handle more than one breadcrumb is up to you, but I
	* 	think the default setting of just displaying them all is a little bit weird
	*	  since I would think that there should be only one line breadcrumbs
	*/
	foreach($breadcrumb as $crumb)
	{
		?>
			<div class="breadcrumb-line">
				<?php
				$i = 0;
				foreach($crumb as $item)
				{
					if ($item['url'])
						echo "<a href=\"{$item['url']}\" class=\"breadcrumb-item breadcrumb-level-{$i}\">{$item['name']}</a> > ";
					else
						echo "<span class=\"breadcrumb-item breadcrumb-level-{$i}\">{$item['name']}</span>";
					$i++;
				}
				?>
			</div>
		<?php
	}
?>
</div>
