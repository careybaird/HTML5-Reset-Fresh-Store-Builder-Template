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
			loadTemplateElement('header', 'stylesheets');
			loadTemplateElement('header', 'rss');
		?>
	</head>
	
	<body<?= $body_onload ?>>
		<?php
			if (ADMIN_LOGGED_IN)
				loadTemplateElement('adminstrip', $adminstripename);
		?>
		
		<div id="container">
			<?php
				if (ADMIN_LOGGED_IN)
					loadTemplateElement($editinplacename, 'editinplaceoptions');
			?>
			
			<header id="header">
				<div id="header-left">
					<?php
						loadTemplateElement('header', 'logo');
					?>
				</div>
				
				<div id="header-right">
					<?php
						loadTemplateElement('header', 'navigation');
						loadTemplateElement('header', 'cart');
					?>
				</div>
				
				<div class="clearall"></div>
			</header>
			
			<div id="main">
				<div id="content-right">
					<?php
						loadTemplateElement('header', 'breadcrumb');
						loadTemplateElement('header', 'messages');
						echo $pagecontents;
						if (ADMIN_LOGGED_IN && $editinplacename != '')
							loadTemplateElement($editinplacename, 'editinplacejs');
					?>
				</div>
				
				<div id="menu-left">
					<?php
						loadTemplateElement('sidebox', 'search');
						loadTemplateElement('sidebox', 'categories');
						loadTemplateElement('sidebox', 'brands');
						loadTemplateElement('sidebox', 'filters');
						foreach ($sideboxes as $sidebox)
							loadTemplateElement('sidebox', $sidebox['type']);
						loadTemplateElement('sidebox', 'amazonlogo');
					?>
				</div>
					
				<div class="clearall"></div>		
			</div>

			<footer>
				<?php
					loadTemplateElement('footer', 'securepayments');
					loadTemplateElement('footer', 'links');
				?>
			</footer>
			
		</div>
		
	<script type="text/javascript" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/scripts/main.js"></script>
	<?php
		if (isset($includescripts) && is_array($includescripts))
			foreach ($includescripts as $script)
				echo "<script type=\"text/javascript\" src=\"{$script}\"></script>";
		loadTemplateElement('footer', 'analytics');
	?>
	</body>
	
</html>
