<?php
	// This page needs to be cleaned up
?>
<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

	<form action="<?= URL_SITE ?>filter-products/" method="post" id="filterform">
	
		<?php
			foreach ($filteroptions as $key => $item)
			{
				if ($key === 'filterprices')
				{
					?>
					<div class="filter-form-attribute">

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
						
						<br class="clearall" />
					</div>
					<?php
					
				}
				else if ($key === 'filtermanufacturer')
				{
					?>
					
					<div class="filter-form-attribute">
									
						<div class="filter-form-title"><?= gTT('FILTEROPTIONS_MANUFACTURER') ?></div>
						
						<div class="filter-form-field">
							<select name="filtermanufacturer">
								<option value="-1"><?= gTT('FILTEROPTIONS_ANY') ?></option>
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
					
					<?php
				}
				else
				{
				?>
					<div class="filter-form-attribute">
					
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
										<option value="-1"><?= gTT('FILTEROPTIONS_ANY') ?></option>
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
										<option value="-1"><?= gTT('FILTEROPTIONS_ANY') ?></option>
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
						
						<br class="clearall" />
					</div>
				<?php	
				
				}		
			}
		?>

		<input type="submit" value="<?= gTT('FILTEROPTIONS_BUTTON') ?>" id="filter-form-submit" />
	</form>
