<?php
	if (isset($pagination) && $pagination['quantity'] > 0)
	{
		?>
		<form action="/" method="get">

			
			
			<div class="pagination-options">
				<label>Sort by </label>
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
							<option value="<?= buildListingLink($pagination['baselink'], $pagination['currentpage'], $pagination['currentsort'], '', ($i * PER_PAGE_PRODUCTSBYCATEGORY), PER_PAGE_PRODUCTSBYCATEGORY) ?>" <?= (($i * PER_PAGE_PRODUCTSBYCATEGORY) == $pagination['currentperpage'] ? 'selected' : '') ?>><?= $i * PER_PAGE_PRODUCTSBYCATEGORY ?> per page</option>
							
						<?php
					}
				?>
				</select>
				
				<?php
					if ($pagination['pages'] > 1)
					{
						?>
						<label>Page:</label>
						
						<?php
						if ($pagination['currentpage'] > 1)
						{
							?>
							<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']-1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>">&lsaquo; prev</a>
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
						<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']+1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], PER_PAGE_PRODUCTSBYCATEGORY) ?>">next &rsaquo;</a>
						<?php
					}
				?>
			</div>
			
			<?php
			/*
			<p>Showing <?= 1 + (($pagination['currentpage'] - 1) * $pagination['currentperpage']) ?> to <?= ($pagination['currentpage'] == $pagination['pages'] ? $pagination['quantity'] : $pagination['currentpage'] * $pagination['currentperpage']) ?> of <?=  $pagination['quantity'] ?> products.</p>
			*/
			?>
			
		</form>	
			
		<?php
	}
?>