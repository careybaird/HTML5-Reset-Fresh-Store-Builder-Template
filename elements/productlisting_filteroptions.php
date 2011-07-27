<?php
	if ($currentproductfilters)
	{
		?>
			<div id="product-filter-options">
		
		
					
				
				<div id="product-filter-options-links">
					<a href="<?= URL_SITE ?>filter-products/"><img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/edit.png" /> <?= gTT('FILTEROPTIONS_CHANGE') ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= URL_SITE ?>filter-products/cancel/"><img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/delete.png" /> <?= gTT('FILTEROPTIONS_REMOVE') ?></a>
				</div>
				
				<?= gTT('FILTEROPTIONS_CURRENTLY') ?>
				
				<br class="clearall" />
				
					<?php
					foreach ($currentproductfilters as $key => $item)
					{
						$filtered = '';
						$displayname = '';
						
						if (!$item['attribute'])
						{
							$filtered = $item['filters'];						
							$displayname = $item['name'];
						}
						else if ($item['attribute']['valuetype'] == 'checkbox')
						{
							$i=0;
							foreach ($item['filters'] as $value => $check)
							{
								$i++;
								if (sizeof($item['filters']) == 1)
								{
									$filtered .= $value.$item['attribute']['units'];
								}
								else if ($i == sizeof($item['filters']))
								{
									$filtered = substr($filtered, 0, sizeof($filtered) - 3);
									$filtered .= ' &amp; '.$value.$item['attribute']['units'];
								}
								else
								{
									$filtered .= $value.$item['attribute']['units'].', ';
								}
							}
							
							$displayname = $item['attribute']['displayname'];
							
						}
						else if ($item['attribute']['valuetype'] == 'yesorno')
						{
							$filtered = ($item['filters'] == 1 ? 'Yes' : 'No');
							$displayname = $item['attribute']['displayname'];
						}
						else
						{
							$filtered = $item['filters'];
							$displayname = $item['attribute']['displayname'];
						}
						?>
							<div class="attribute-name"><?= $displayname ?>:</div>
							<div class="attribute-values"><?= $filtered ?></div>
							<br class="clearall" />
						<?php
					}
					?>
			</div>
		<?php
	}
?>