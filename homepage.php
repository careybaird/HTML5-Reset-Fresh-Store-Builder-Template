<?php
	define('IS_HOME', true); # This will need to be removed, I forgot what I added it for
	loadTemplateElement('homepage', 'manufacturers', array('manufacturers' => $manufacturers));
?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('homepage', 'specialoffers', array('reducedproducts' => $reducedproducts));
	loadTemplateElement('homepage', 'bestsellers', array('topproducts' => $topproducts));
