<div class="menu-left-header">
	<h4><?= $sidebox['title'] ?></h4>
</div>

<div class="menu-left-contents">
	<ul>
		<?php
			if (is_array($sidebox['pages']))
			{
				foreach ($sidebox['pages'] as $page)
				{
					?>
					<li><a<?= $page['nofollow'] ? ' rel="nofollow"' : '' ?> href="<?= URL_SITE ?><?= $page['pagename'] ?>/"><?= $page['linktitle'] ?></a></li>
					<?php
				}
			}
			else
			{
				?>
				<li>No pages added</li>
				<?php
			}
		?>
	</ul>
</div>