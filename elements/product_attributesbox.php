<?php
	if (sizeof($attributes) > 0)
	{
		?>
			<div id="product-details-box">
				<h3 class="page-subtitle product-information-title">Key Information</h3>
				<ul class="product-list product-information">
				<?php
					foreach ($attributes as $name => $value)
					{
						if (trim($value) == '') continue;
						?>
							<li class="product-info product-list-item">
								<span class="label"><?= $name ?></span>
								<span class="value">
								<?php
									if (is_array($value))
									{
										foreach ($value as $key => $item)
										{
											echo $key . ' = ' . $item.',';
										}
									}
									else
									{
										echo $value;
									}
								?>
								</span>
								<br class="clearall" />
							</li>
						<?php
					}
				?>
				</ul>
			</div>
		<?php	
	}
