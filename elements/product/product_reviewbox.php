<?php
if ($product['reviewiframelink'] != '')
{
	?>
		<div id="product-review-box">			
			<h3 class="page-subtitle"><a href="<?= URL_SITE ?><?= $product['pagename'] ?>/reviews/" rel="nofollow">See All Product Reviews</a></h3>
		</div>
	<?php
}
