<div id="breadcrumb">
<?php
	foreach($breadcrumb as $crumb)
	{
		?>
			<p>
				<?php
				foreach($crumb as $item)
					if ($item['url'])
					{
					?>
					<a href="<?= $item['url'] ?>"><?= $item['name'] ?></a> >
					<?php
					}
					else
						echo $item['name'];
				?>
			</p>
		<?php
	}
?>
</div>		
