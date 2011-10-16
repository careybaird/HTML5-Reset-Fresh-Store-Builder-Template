<?php
	if (isset($pagination) && $pagination['quantity'] > 0)
	{
		?>
		<form action="/" method="get">

			<div class="pagination-options">
				<label><?=gTT('PRODUCT_SORT_BY')?> </label>
				<select onchange="window.location = this.value;">
					<?php
					$i=0;
					foreach ($pagination['sortoptions'] as $sortkey => $sortoption)
					{
						if ($i == 0) $sortkeydefault = $sortkey;
						$i++;
							?>
							<option value="<?= buildListingLink($pagination['baselink'], $pagination['currentpage'], $sortkey, $sortkeydefault, $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>" <?= ($sortkey == $pagination['currentsort'] ? 'selected' : '') ?>><?= $sortoption['displayname'] ?></option>
							<?php
					}
					?>
				</select>
				
				<label>Show</label>
				<select onchange="window.location = this.value;">
					<?php
					$i = 0;
					while ($i * PER_PAGE_PRODUCTSBYCATEGORY < 100)
					{
						$i++;
						?>	
							<option value="<?= buildListingLink($pagination['baselink'], $pagination['currentpage'], $pagination['currentsort'], '', ($i * PER_PAGE_PRODUCTSBYCATEGORY), PER_PAGE_PRODUCTSBYCATEGORY) ?>" <?= (($i * PER_PAGE_PRODUCTSBYCATEGORY) == $pagination['currentperpage'] ? 'selected' : '') ?>><?=sprintf(gTT('PER_PAGE'), $i * PER_PAGE_PRODUCTSBYCATEGORY) ?></option>
						<?php
					}
				?>
				</select>
				
				<?php
					if ($pagination['pages'] > 1)
					{
						?>
						<label><?=gTT('PAGE')?></label>
						
						<?php
						if ($pagination['currentpage'] > 1)
						{
							?>
							<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']-1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>"><?=gTT('PREVIOUS')?></a>
							<?php
						}
						?>
						<select onchange="window.location = this.value;">
							<?php
							for ($i=1; $i <= $pagination['pages']; $i++)
							{
								?>
									<option value="<?= buildListingLink($pagination['baselink'], $i, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>" <?= ($i == $pagination['currentpage'] ? 'selected' : '') ?>><?= $i ?></option>
								<?php
							}
							?>
						</select>
						<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']+1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>"><?=gTT('NEXT')?></a>
						<?php
					}
				?>
			</div>
			
		</form>
		<?php
	}
?>
