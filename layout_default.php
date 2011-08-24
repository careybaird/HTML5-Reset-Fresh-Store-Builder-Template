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
			loadTemplateElement('header', 'rss', array('pagetype' => $pagetype));
		?>
	</head>
	
	<body<?= $body_onload ?>>
		<?php
			if (ADMIN_LOGGED_IN)
				loadTemplateElement('adminstripe', $adminstripename, $editinplacevariables);
		?>
		
		<div id="container">
			<?php
				if (ADMIN_LOGGED_IN)
					loadTemplateElement($editinplacename, 'editinplaceoptions', $editinplacevariables);
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
						loadTemplateElement('header', 'cart', array('pages' => $pages, 'amazon' => $amazon, 'showcheckoutbutton' => $showcheckoutbutton));
					?>
				</div>
				
				<div class="clearall"></div>
			</header>
			
			<div id="main">
				<div id="content-right">
					<?php
						loadTemplateElement('header', 'breadcrumb', array('breadcrumb' => $breadcrumb));
						loadTemplateElement('header', 'messages');
						echo $pagecontents;
						if (ADMIN_LOGGED_IN && $editinplacename != '')
							loadTemplateElement($editinplacename, 'editinplacejs', $editinplacevariables);
					?>
				</div>
				
				<div id="menu-left">
					<?php
						loadTemplateElement('sidebox', 'search', array('pages' => $pages));
						loadTemplateElement('sidebox', 'categories', array('leftmenucategories' => $leftmenucategories));
						loadTemplateElement('sidebox', 'brands', array('leftmenumanufacturers' => $leftmenumanufacturers));
						loadTemplateElement('sidebox', 'filters', array('sidebarfilters' => $sidebarfilters);
						foreach ($sideboxes as $sidebox)
							loadTemplateElement('sidebox', $sidebox['type'], array('sidebox' => $sidebox);
						loadTemplateElement('sidebox', 'amazonlogo', array('amazon' => $amazon));
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
		loadTemplateElement('footer', 'analytics', array('pagetype' => $pagetype, 'amazon' => $amazon));
	?>
	</body>
	
</html>
