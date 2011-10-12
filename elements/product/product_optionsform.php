<?php
/*
<p><em><a href="" onclick="showOptionsTable(<?= $product_id ?>); return false;">View options in a table format</a></em></p>
*/
?>

<?php
	$i=0;
	foreach ($optionsummary['options'] as $item)
	{
		?>
		<p>
			<label id="productoptionlabel_<?= $i ?>"><?= $item['displayname'] ?></label>
			<select id="productoption_<?= $i ?>" name="<?= $item['name'] ?>" onchange="populateOptions(<?= $product_id ?>, <?= $i ?>);"<?= ($i==0 ? '' : ' disabled') ?>>
				<option value="0"><?=sprintf(gTT('PRODUCT_OPTION_CHOOSE'), $item['displayname'])?></option>
				<?php
					if ($i == 0)
					{
						foreach ($firstoptionvalues as $value)
						{
							?>
								<option value="<?= $value ?>"><?= $value ?></option>
							<?php
						}
					}
				?>
			</select>
		</p>
		<?php
		$i++;
	}
?>

<div id="product-option-offer">
	<p><em><?=gTT('PRODUCT_OPTION_DESCRIPTION')?></em></p>
</div>
