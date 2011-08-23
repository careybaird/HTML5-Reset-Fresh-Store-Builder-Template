<div class="filter-form-attribute filter-form-manufacturers">
	<div class="filter-form-title">Manufacturer:</div>
	<div class="filter-form-field">
		<select name="filtermanufacturer">
			<option value="-1">Any</option>
			<?php
				$filtermanufacturers = $item;
				foreach ($filtermanufacturers as $key => $item)
				{
					?>
					<option value="<?= $item['id'] ?>"<?= $_SESSION['productfilters']['filtermanufacturer'] == $item['id'] ? ' selected' : '' ?> ><?= $item['linktitle'] ?></option>
					<?php
				}
			?>
		</select>
	</div>
	<br class="clearall" />
</div>
