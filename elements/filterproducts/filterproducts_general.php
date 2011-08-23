<div class="filter-form-attribute filter-form-<?= str_replace('filter', '', $key) ?>">
		<div class="filter-form-title"><?= $item['displayname'] ?></div>
		<div class="filter-form-field">
			<?php
				if ($item['valuetype'] == 'checkbox')
				{
					$i = 0;
					foreach ($item['values'] as $valuekey => $valueitem)
					{
						?>
						<span class="filter-form-checkbox">
							<input type="checkbox" id="<?= $item['originalname'].$i ?>" name="<?= $item['originalname'] ?>[]" value="<?= $valueitem['value'] ?>" onclick="checkForAllTicked(<?= $item['originalname'] ?>, $(all<?= $item['originalname'] ?>))" <?= $_SESSION['productfilters'][$item['originalname']][$valueitem['value']] ? ' checked' : '' ?> />
							<label for="<?= $item['originalname'].$i ?>"><?= $valueitem['value'].$item['units'] ?></label>
						</span>
						<?php
						$i++;
					}
					?>
					<span class="filter-form-checkbox-reset">
						<a href="#" onclick="unCheck($('filterform'), '<?= $item['originalname'] ?>'); return false;">Reset</a>
					</span>
					<?php
				}
				else if ($item['valuetype'] == 'dropdown')
				{
					?>
					<select name="<?= $item['originalname'] ?>">
						<option value="-1">Any</option>
						<?php
						foreach ($item['values'] as $valuekey => $valueitem)
						{
							?>
							<option value="<?= $valueitem['value'] ?>"<?= $_SESSION['productfilters'][$item['originalname']] == $valueitem['value'] ? ' selected' : '' ?> ><?= $valueitem['value'] ?></option>
							<?php
						}
						?>
					</select>
					<?php
				}
				else if ($item['valuetype'] == 'yesorno')
				{
					?>
					<select name="<?= $item['originalname'] ?>">
						<option value="-1">Any</option>
						<?php
						foreach ($item['values'] as $valuekey => $valueitem)
						{
							?>
							<option value="<?= $valueitem['value'] ?>"<?= $_SESSION['productfilters'][$item['originalname']] == $valueitem['value'] ? ' selected' : '' ?> ><?= $valueitem['value'] == '1' ? 'Yes' : 'No' ?></option>
							<?php
						}
						?>
					</select>
					<?php
				}
			?>
		</div>
		<div class="clearall"></div>
	</div>
