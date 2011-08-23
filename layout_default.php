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
			loadElement('header', 'stylesheets');
			loadElement('header', 'rss');
		?>
	</head>
	
	<body<?= $body_onload ?>>
		<?php
			if (ADMIN_LOGGED_IN)
				loadElement('adminstrip', $adminstripename);
		?>
		
		<div id="container">
			<?php
				if (ADMIN_LOGGED_IN)
					loadElement($editinplacename, 'editinplaceoptions');
			?>
			
			<header id="header">
				<div id="header-left">
					<?php
						loadElement('header', 'logo');
					?>
				</div>
				
				<div id="header-right">
					<?php
						loadElement('header', 'navigation');
						loadElement('header', 'cart');
					?>
				</div>
				
				<div class="clearall"></div>
			</header>
			
			<div id="main">
				<div id="content-right">
					<?php
						loadElement('header', 'breadcrumb');
						loadElement('header', 'messages');
						echo $pagecontents;
						if (ADMIN_LOGGED_IN && $editinplacename != '')
							loadElement($editinplacename, 'editinplacejs');
					?>
				</div>
				
				<div id="menu-left">
					<?php
						loadElement('sidebox', 'search');
						loadElement('sidebox', 'categories');
						loadElement('sidebox', 'brands');
						loadElement('sidebox', 'filters');
						foreach ($sideboxes as $sidebox)
							loadElement('sidebox', $sidebox['type']);
						loadElement('sidebox', 'amazonlogo');
					?>
				</div>
					
				<div class="clearall"></div>		
			</div>

			<footer>
				<?php
					loadElement('footer', 'securepayments');
					loadElement('footer', 'links');
				?>
			</footer>
			
		</div>
		
	<script type="text/javascript" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/scripts/main.js"></script>
	<?php
		if (isset($includescripts) && is_array($includescripts))
			foreach ($includescripts as $script)
				echo "<script type=\"text/javascript\" src=\"{$script}\"></script>";
		loadElement('footer', 'analytics');
	?>
	</body>
	
</html>
