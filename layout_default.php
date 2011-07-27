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

		<link rel="stylesheet" type="text/css" href="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/styles/style.css">	
		
		<?php require('elements/analytics.php'); ?>
		
		<?php
			if ($pagetype == 'category')
			{
				?>
				<link href="<?= URL_SITE ?>rss/<?= PAGENAME ?>/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Products in category <?= $thiscategory['linktitle'] ?>" />
				<?php
			}
		?>
		
		<link href="<?= URL_SITE ?>rss/all-products/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Products" />
		<link href="<?= URL_SITE ?>rss/special-offers/" rel="alternate" type="application/rss+xml" title="<?= SITE_NAME ?> Special Offers" />
	</head>
	<body<?= $body_onload ?>>
		<?php
			if (ADMIN_LOGGED_IN && file_exists(PATH_TEMPLATES.TEMPLATE_FOLDER.'/elements/admin_stripe_'.$adminstripename.'.php'))
			{
				require('elements/admin_stripe_'.$adminstripename.'.php');
			}
		?>
		
		<div id="container">
			<?php
				if (ADMIN_LOGGED_IN)
				{
					require('elements/'.$editinplacename.'_editinplaceoptions.php');
				}
			?>
			
			<header>
				<div id="header-left">
					<a href="<?= URL_SITE ?>"><?= getTemplateImage('HEAD_LOGO', '', '', '<h1>'.SITE_NAME.'</h1>') ?></a>
				</div>
				
				<div id="header-right">
					<a href="<?= URL_SITE ?><?= $pages['basket']['pagename'] ?>/" rel="nofollow"><?= gTT('HEAD_VIEW_CART') ?></a>
					<p><?= ($amazon->cart ? ($amazon->cart['totalquantity'] == 1 ? '1 '.gTT('HEAD_ITEM') : $amazon->cart['totalquantity'].' '.gTT('HEAD_ITEMS')) : '0 '.gTT('HEAD_ITEMS')) ?> - <?= formatProductPrice($amazon->cart['subtotal']) ?></p>
					
					<?php
						if ($amazon->cart && $amazon->cart['totalquantity'] > 0 && $showcheckoutbutton)
						{
							?>
									<a href="<?= URL_SITE ?><?= $pages['checkout']['pagename'] ?>/" rel="nofollow">
										<?= getTemplateImage('BUTTON_CHECKOUT') ?>
									</a>
							<?php
						}
					?>
				</div>
				<div class="clearall"></div>
			</header>
			
			<div id="main">
				<div id="content-right">
					<?php require('elements/breadcrumb.php') ?>
					<?php require('elements/messages.php') ?>
					<?= $pagecontents ?>
					<?php
						if (ADMIN_LOGGED_IN && $editinplacename != '')
						{
							require('elements/'.$editinplacename.'_editinplacejs.php');
						}
					?>
				</div>
				
				<div id="menu-left">
					<?php require('elements/searchbox.php') ?>
					<?php require('elements/categoriesbox.php') ?>
					<?php require('elements/brandsbox.php') ?>
					<?php require('elements/filtersbox.php') ?>
					<?php
						foreach ($sideboxes as $sidebox)
						{
							require('elements/sidebox_'.$sidebox['type'].'.php');
						}
					?>	
					<?php require('elements/amazonlogo.php') ?>
				<div class="clearall"></div>		
			</div>

			<div id="footer">
				<div id="footer-securepayments">
					<?= getTemplateImage('IMAGE_SECURE_SHOPPING') ?>
				</div>
				<p>
					<?= sprintf(gTT('FOOTER_COPYRIGHT'), date('Y').' '.SITE_NAME) ?><br />
					<a href="<?= URL_SITE ?>terms-of-use/">Terms of Use</a> - <a href="<?= URL_SITE ?>privacy-policy/">Privacy Policy</a> - <a href="<?= URL_SITE ?>site-map/">Site Map</a><br /><br /><?= getFooterText() ?>
				</p>
				
				
			</div>
			
		</div>
		
	<script type="text/javascript" src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/scripts/main.js"></script>
	<?php if (isset($includescripts) && is_array($includescripts)) foreach ($includescripts as $script) echo "<script type=\"text/javascript\" src=\"{$script}\"></script>"; ?>	
	</body>
</html>
