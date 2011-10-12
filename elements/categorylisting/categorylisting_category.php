<div class="category-listing-box">
	<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><img src="<?= URL_SITE ?>img/<?= $subcategory['pagename'] ?>_<?= $subcategory['productimage']['id'] ?>_110.jpg" alt="<?= $subcategory['title'] ?>" title="<?= $subcategory['title'] ?>" class="category-image" /></a>
	<h3 class="category-title subcategory-title"><a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>"><?= $subcategory['title'] ?></a></h3>
	<div class="product-count"><?= sprintf(gTT('CATEGORY_PRODUCT_STOCK'), $subcategory['productcount']) ?></div>
	<a href="<?= URL_SITE ?><?= $subcategory['pagename'].'/' ?>" rel="nofollow" class="viewall"><?=gTT('CATEGORY_VIEW_ALL')?></a>
</div>
