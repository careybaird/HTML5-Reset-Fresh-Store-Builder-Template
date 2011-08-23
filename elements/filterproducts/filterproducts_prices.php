<div class="filter-form-attribute filter-form-prices">
	<div class="filter-form-title">Price</div>
	<div class="filter-form-field">
		<select name="filterprice">
			<option value="-1">Any</option>
			<?php
				$filterprices = $item;
				foreach ($filterprices as $key => $item)
				{
					?>
					<option value="<?= $item['start'].'|'.$item['end'] ?>"<?= $_SESSION['productfilters']['filterprice'] == $item['start'].'|'.$item['end'] ? ' selected' : '' ?> ><?= $item['displayvalue'] ?></option>
					<?php
				}
			?>
		</select>
	</div>
	<div class="clearall"></div>
</div>
