<?php
	define('IS_HOME', true);
	require_once('elements/manufacturersbox.php');
?>

<h2 class="page-title"><?= $page['title'] ?></h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>
<br class="clearall" />

<?php
	require_once('elements/specialoffersbox.php');
	require_once('elements/bestsellersbox.php');
