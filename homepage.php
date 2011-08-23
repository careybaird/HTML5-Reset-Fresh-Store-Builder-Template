<?php
	define('IS_HOME', true);
	loadTemplateElement('homepage', 'manufacturers');
?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	loadTemplateElement('homepage', 'specialoffers');
	loadTemplateElement('homepage', 'bestsellers');
