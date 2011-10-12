<?php
	loadTemplateElement('homepage', 'manufacturers', array('manufacturers' => $manufacturers));
?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('homepage', 'specialoffers', array('reducedproducts' => $reducedproducts));
	loadTemplateElement('homepage', 'bestsellers', array('topproducts' => $topproducts));
