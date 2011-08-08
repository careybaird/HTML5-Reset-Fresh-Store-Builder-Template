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
	
	<body<?= $body_onload ?> id="checkout">
		<?php
			if (ADMIN_LOGGED_IN && file_exists(PATH_TEMPLATES.TEMPLATE_FOLDER.'/elements/admin_stripe_'.$adminstripename.'.php'))
			{
				require('elements/admin_stripe_'.$adminstripename.'.php');
			}
		?>
		<div id="content">

			<?php
				if (ADMIN_LOGGED_IN)
					require('elements/'.$editinplacename.'_editinplaceoptions.php');
			?>
				
			<div id="main">
				<?php
					require('elements/messages.php');
				 	echo $pagecontents;
					if (ADMIN_LOGGED_IN && $editinplacename != '')
						require('elements/'.$editinplacename.'_editinplacejs.php');
				?>
			</div>
				
			<div class="clearall"></div>
							
		</div>
	</body>
	
</html>
