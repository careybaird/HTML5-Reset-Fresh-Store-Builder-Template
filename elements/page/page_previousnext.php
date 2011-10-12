<?php
	if (isset($pagination) && $pagination['quantity'] > 0 && $pagination['pages'] > 1)
	{
		?>
		<div class="pagination-previousnext">
			<div class="pagination-previousnext-left">
				<?php
				if ($pagination['currentpage'] <> 1)
				{
					?>
						<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']-1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], $defaultperpage) ?>"><?=gTT('PREVIOUS')?></a>
					<?php
				}
				else
				{
					?>
					&nbsp;
					<?php
				}
				?>
			</div>
			
			<div class="pagination-previousnext-right">
				<?php
				if ($pagination['currentpage'] <> $pagination['pages'])
				{
					?>
						<a href="<?= buildListingLink($pagination['baselink'], $pagination['currentpage']+1, $pagination['currentsort'], key($pagination['sortoptions']), $pagination['currentperpage'], $defaultperpage) ?>"><?=gTT('NEXT')?></a>
					<?php
				}
				else
				{
					?>
					&nbsp;
					<?php
				}
				?>
			</div>
			
			<p><em><?= 1 + (($pagination['currentpage'] - 1) * $pagination['currentperpage']) ?> <?=gTT('TO')?> <?= ($pagination['currentpage'] == $pagination['pages'] ? $pagination['quantity'] : $pagination['currentpage'] * $pagination['currentperpage']) ?> <?=gTT('OF')?> <?=  $pagination['quantity'] ?> <?=gTT('PAGES')?></em></p>
			
			<br class="clearall" />
		</div>
		
		<?php
	}	
?>
