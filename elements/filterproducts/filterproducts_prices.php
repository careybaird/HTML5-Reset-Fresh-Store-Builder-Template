<div class="filter-form-attribute filter-form-prices">
	<div class="filter-form-title"><?=gTT('FILTEROPTIONS_PRICE')?></div>
	<div class="filter-form-field">
		<select name="filterprice">
			<option value="-1"><?=gTT('FILTEROPTIONS_ANY')?></option>
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
