<?php
	define('IS_HOME', true);
	require_once('elements/manufacturersbox.php');
?>

<h2 id="page-title"><?= $page['title'] ?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<?php
	require_once('elements/specialoffersbox.php');
	require_once('elements/bestsellersbox.php');
