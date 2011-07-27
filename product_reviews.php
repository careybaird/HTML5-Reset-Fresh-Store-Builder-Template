<h1 id="product-title"><?= $product['title'] ?> Reviews</h1>

<div style="float: right; display: inline; margin: 0 0 20px 20px; width: 450px; text-align: right;">
	<div id="product-price-box">
	<?php
		if (!$product['parent'])
		{
			?>
				<h2 class="pricedetail">
					<?php
						if ($offer['isreduced'])
						{
							?>
							<span class="old"><?= $offer['originalpriceformatted'] ?></span>
							<?php
						}
					?>
					<?= ($offer ? $offer['priceformatted'] : ($product['price'] == 0 ?  'N/A' : $product['priceformatted'])) ?>
				</h2>
				<br /><br />
				<a href="<?= URL_SITE ?>basket/add/<?= $product['id'] ?>/<?= $offer['id'] ?>/" rel="nofollow">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/buttons/addtocart.gif" alt="Add to your Shopping Cart" title="Add to your Shopping Cart" />
				</a>
			<?php
		}
	?>
	<br /><br />
	<p>View More Details and Buy:<br /><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/"><?= $product['linktitle'] ?></a></p>
	</div>
	
</div>


<a href="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_500.jpg" rel="lightbox[product]" title="<?= $product['title'] ?>">
	<img src="<?= URL_SITE ?>img/<?= $product['pagename'] ?>_<?= $mainimage['id'] ?>_250.jpg" />
</a>


<iframe name="inlineframe" src="<?= $product['reviewiframelink'] ?>" frameborder="0" scrolling="auto" width="700" height="2000" marginwidth="5" marginheight="5" ></iframe> 


<?php
	/*
	foreach ($reviews as $review)
	{
		?>
		<div>
		<h2><?= $review['title'] ?></h2>
		<p><b><?= ($review['reviewername'] == '' ? 'Anonymous' : $review['reviewername']) ?></b><?= ($review['reviewerlocation'] == '' ? '' : ' from '.$review['reviewerlocation']) ?> - <?= $review['rating'] ?> out of 5.</p>
		<?= $review['review'] ?>
		<br /><br />
		<p><?= $review['helpfulvotes'] ?> people voted this review as helpful and <?= $review['totalvotes'] - $review['helpfulvotes'] ?> people voted this review as unhelpful.</p>
		</div>
		<hr />
		<?php
	}
	*/
?>