<?php
	if (isset($pagination) && $pagination['pages'] > 1 )
	{
		?>			
			<div class="sort-optons">
				<p>
				Sort by: 
				<a href="<?= buildProductListingLink($baselink, $page, 'bestselling', $perpage) ?>">
					Bestselling
				</a> -
				<a href="<?= buildProductListingLink($baselink, $page, 'price-asc', $perpage) ?>">
					Price (Low to High)
				</a> -
				<a href="<?= buildProductListingLink($baselink, $page, 'price-desc', $perpage) ?>">
					Price (High to Low)
				</a> -
				<a href="<?= buildProductListingLink($baselink, $page, 'reviewscore', $perpage) ?>">
					Customer Review Score
				</a>
				</p>
			</div>
		<?php
	}
?>