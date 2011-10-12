<table id="basket-products">
	<thead>
		<tr>
			<th colspan="2"><?=gTT('BASKET_COL_ITEMS')?></th>
			<th><?=gTT('BASKET_COL_QUANTITY')?></th>
			<th class="remove"><?=gTT('BASKET_COL_REMOVE')?></th>
			<th class="price"><?=gTT('BASKET_COL_PRICE')?></th>
		</tr>
	</thead>
	<tfoot>
		<?php
		if ($freedelivery)
		{
			?>
			<tr>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th><em><?=gTT('BASKET_DELIVERY')?></em></th>
				<th class="price">
					<?= formatProductPrice(0) ?>
				</th>
			</tr>
			<?php
		}
		?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?=gTT('BASKET_TOTAL')?></th>
			<th class="price">
				<?= formatProductPrice($amazon->cart['subtotal']) ?>
			</th>
		</tr>
	</tfoot>	
	<tbody>

<?php
foreach ($basketitems as $item)
{
	?>
	<tr>
		<td>
			<a href="<?= $item['imagelarge'] ?>" rel="lightbox[cart]" title="<?= $item['title'] ?>">
				<img src="<?= $item['image'] ?>" />
			</a>
		</td>
		<td>
			<a href="<?= URL_SITE ?><?= $item['pagename'] ?>/">
				<?= $item['title'] ?>
			</a>
			<?php
				if (isset($item['options']))
				{
					echo '<br />';
					foreach ($item['options'] as $name => $value)
					{
						echo '<em>'.$name.'</em> - '.$value.'<br />';
					}
				}
			?>
		</td>
		<td>
			<form action="<?= URL_SITE ?>basket/change-quantity/" method="post" />
				<input type="hidden" value="<?= $item['asin'] ?>" name="asin" />
				<select name="quantity" onchange="this.form.submit();">
				<?php
					for ($i=1; $i<11; $i++)
					{
						?>
						<option value="<?= $i ?>"<?= ($i == $item['quantity'] ? ' selected' : '') ?>><?= $i ?></option>
						<?php
					}
				?>
				</select>
			
			</form>
		</td>
		<td class="remove">
			<a href="<?= URL_SITE ?>basket/remove/<?= $item['asin'] ?>/">
				<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/basket_delete.png" alt="<?=gTT('BASKET_REMOVE_CART')?>" />
			</a>
		</td>
		<td class="price">
			<?= formatProductPrice($item['price']) ?>
		</td>
	</p>
	<?php
}
?>
</table>
