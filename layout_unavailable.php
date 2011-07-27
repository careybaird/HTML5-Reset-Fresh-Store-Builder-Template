<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title><?= $page_title ?></title>
		
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="index,follow" />
		<meta name="keywords" content="<?= $page_keywords ?>" />
		<meta name="description" content="<?= $page_description ?>" />

		<link rel="stylesheet" type="text/css" href="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/styles/screen.css">
		
		<script type="text/javascript" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/scripts/main.js"></script>
		
		<?php
			if (isset($includescripts) && is_array($includescripts))
			foreach ($includescripts as $script)
			{
				?>
					<script type="text/javascript" src="<?= $script ?>"></script>
				<?php
			}
		?>
		
		<script language="JavaScript" type="text/javascript">
		if (top.location != self.location) top.location = self.location;
		</script>
		
		<?php require('elements/analytics.php'); ?>
		
	</head>
	<body>
	
		<div id="doc4">
			<div id="container">		
				<div id="main">
					<br />
					<br />
					<br />
					
					<a href="http://www.freshstorebuilder.com/">
					<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/fsb_logo.png" style="float: right; display:inline; margin: 20px;" />
					</a>
					
					
					<h1><?= SITE_NAME ?></h1>
					
					<p>Welcome to <?= SITE_NAME ?>. The site is currently not available but will be up and running shortly.</p>
					
					<p>Please check back to see our great selection of products at the best prices.</p>
					
					<p><strong>IMPORTANT:</strong> If you are the store owner, please login to your dashboard for instructions on how to put your store live.</p>
					
					<p><em><?= getFooterText() ?></em></p>
					
					<br />
					<br />
					<br />
				</div>
			</div>
		</div>
		
				
	</body>
</html>