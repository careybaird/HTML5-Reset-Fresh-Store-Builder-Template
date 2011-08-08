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
			require('elements/rss.php');
		?>
	</head>
	
	<body<?= $body_onload ?>>
		<?php
			if (ADMIN_LOGGED_IN && file_exists(PATH_TEMPLATES.TEMPLATE_FOLDER.'/elements/admin_stripe_'.$adminstripename.'.php'))
				require('elements/admin_stripe_'.$adminstripename.'.php');
		?>
		
		<div id="container">
			<?php
				if (ADMIN_LOGGED_IN)
					require('elements/'.$editinplacename.'_editinplaceoptions.php');
			?>
			
			<header id="header">
				<div id="header-left">
					<?php
						require('elements/logo.php');
					?>
				</div>
				
				<div id="header-right">
					<?php
						require('elements/navigation.php');
						require('elements/cart.php');
					?>
				</div>
				
				<div class="clearall"></div>
			</header>
			
			<div id="main">
				<div id="content-right">
					<?php
						require('elements/breadcrumb.php');
						require('elements/messages.php');
						echo $pagecontents;
						if (ADMIN_LOGGED_IN && $editinplacename != '')
							require('elements/'.$editinplacename.'_editinplacejs.php');
					?>
				</div>
				
				<div id="menu-left">
					<?php
						require('elements/searchbox.php');
						require('elements/categoriesbox.php');
						require('elements/brandsbox.php');
						require('elements/filtersbox.php');
						foreach ($sideboxes as $sidebox)
							require('elements/sidebox_'.$sidebox['type'].'.php');
						require('elements/amazonlogo.php');
					?>
				</div>
					
				<div class="clearall"></div>		
			</div>

			<footer>
				<?php
					require('elements/securepayments.php');
					require('elements/footerlinks.php');
				?>
			</footer>
			
		</div>
		
	<script type="text/javascript" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/scripts/main.js"></script>
	<?php
		if (isset($includescripts) && is_array($includescripts))
			foreach ($includescripts as $script)
				echo "<script type=\"text/javascript\" src=\"{$script}\"></script>";
		require('elements/analytics.php');
	?>
	</body>
	
</html>
