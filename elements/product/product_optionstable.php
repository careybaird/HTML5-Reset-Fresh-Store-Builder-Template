<h2>Choose Options</h2>

<?php
/*
<p><em><a href="" onclick="showOptionsForm(<?= $product_id ?>); return false;">View in a dropdown format</a></em></p>
*/
?>

<table width="100%">
	<tr>
		<?php
			foreach ($optionsummary['options'] as $option)
			{
				?>
				<td><?= $option['displayname'] ?></td>
				<?php
			}
		?>
		<?= ($optionsummary['maxsaving'] > 0 ? '<td>Price</td>' : '') ?>
		<td>Our Price</td>
		<td>Availability</td>
		<td>Buy</td>
	</tr>
	
	<?php
		foreach ($options as $item)
		{
			?>
			<tr>
				<?php
					foreach($item['options'] as $optionvalue)
					{
						?>
						<td><?= $optionvalue ?></td>
						<?php
					} 
				?>
				<?= ($optionsummary['maxsaving'] > 0 ? '<td>'.$item['offer']['originalpriceformatted'].'</td>' : '') ?>
				<td>
					<?= $item['offer']['priceformatted'] ?>
					<?= ($item['offer']['amountsaved'] > 0 ? 'You Save '.$item['offer']['savingformatted'].'('.$item['offer']['percentagesaved'].'%)' : '') ?>
				</td>
				<td><?= $item['offer']['availabilitytext'] ?></td>
				<td><a href="<?= URL_SITE ?>basket/add/<?= $item['offer']['product_id'] ?>/<?= $item['offer']['id'] ?>/">Add to Cart</a></td>
			</tr>
			<?php
		}
	?>

</table>