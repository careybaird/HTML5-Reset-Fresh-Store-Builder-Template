<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $page_title ?></title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="keywords" content="<?= $page_keywords ?>" />
		<meta name="description" content="<?= $page_description ?>" />
		<?php
			if ($metanoindex)
				echo '<meta name="robots" content="noindex,follow" />';
			else
				echo '<meta name="robots" content="index,follow" />';
		?>
		<link rel="canonical" href="<?= $canonicalurl ?>" />
		<script type="text/javascript">
			if (top.location != self.location) top.location = self.location;
			window.siteurl = '<?= URL_SITE ?>';
		</script>
		<?php
			require('elements/stylesheets.php');
		?>
	</head>
	
	<body<?= $body_onload ?>>
	
		<div id="container">		
			<div id="main" class="main-<?=PAGENAME?>">
				<?= $pagecontents ?>
			</div>
		</div>
		
	</body>
	
</html>
