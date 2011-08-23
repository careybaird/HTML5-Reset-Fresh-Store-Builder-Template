<?php
	if (is_array($sidebarfilters))
	{
		?>
			<div class="menu-left-header">
				<h4>Filter Options - <a href="<?= URL_SITE ?><?= $pages['filterproducts']['pagename'] ?>/">More</a></h4>
			</div>
		
			<div class="menu-left-contents">
			<form action="<?= URL_SITE ?>filter-products/" method="post" id="sidefilterform">
				<div id="sidefilteroptions">
					<?php
					foreach ($sidebarfilters as $key => $item)
					{
					if ($key === 'filterprices')
					{
						?>
							<div class="sidefilteroption">
							<label for="side-filterprice"><strong>Price:</strong></label>
							
							<select name="filterprice" id="side-filterprice">
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
							
						<?php
						
					}
					else if ($key === 'filtermanufacturer')
					{
						?>
							<div class="sidefilteroption">
							<label for="side-filtermanufacturer"><strong>Manufacturer:</strong></label>

							<select name="filtermanufacturer" id="side-filtermanufacturer">
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

						<?php
					}
					else
					{
					?>
								
							<div class="sidefilteroption">
								<?php
									if ($item['valuetype'] == 'checkbox')
									{
										?>
										<strong><?= $item['displayname'] ?></strong> - <a href="#" onclick="unCheck($('sidefilterform'), '<?= $item['originalname'] ?>'); return false;">Reset</a><br />
										<?php
									
										$i = 0;
										foreach ($item['values'] as $valuekey => $valueitem)
										{
											?>
											
											<span class="sidefiltercheckbox">
												<input type="checkbox" id="<?= $item['originalname'].$i ?>" name="<?= $item['originalname'] ?>[]" value="<?= $valueitem['value'] ?>" onclick="checkForAllTicked(<?= $item['originalname'] ?>, $(all<?= $item['originalname'] ?>))" <?= $_SESSION['productfilters'][$item['originalname']][$valueitem['value']] ? ' checked' : '' ?> />
												<label for="<?= $item['originalname'].$i ?>"><?= $valueitem['value'].$item['units'] ?></label>
											</span>
											<br />
											<?php
											$i++;
										}
									}
									else if ($item['valuetype'] == 'dropdown')
									{
										?>
										<label for="side-<?= $item['originalname'] ?>"><strong><?= $item['displayname'] ?></strong></label>
										<select name="<?= $item['originalname'] ?>" id="side-<?= $item['originalname'] ?>">
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
										<label for="side-<?= $item['originalname'] ?>"><strong><?= $item['displayname'] ?></strong></label>
										<select name="<?= $item['originalname'] ?>" id="side-<?= $item['originalname'] ?>">
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
					
					<?php	
					
						}		
					}
					?>
					
					<input type="submit" value="Filter Products" id="sidefilteroptionssubmit" />
					<?php
						if ($_SESSION['productfilters'])
						{
							?>
								<br /><br /><a href="<?= URL_SITE ?><?= $pages['filterproducts']['pagename'] ?>/cancel/"><img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/delete.png" />Remove Filters</a>
							<?php
						}
					?>
					
				</div>
			</form>
			</div>
			<?php
	}
