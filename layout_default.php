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
				<div class="clearall">
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
					<?php
						foreach ($leftmenucategories as $categorygroup)
						{
							if (sizeof($categorygroup['categories']) == 0) continue;
							?>
							<div class="menu-left-header">
								<h4><?= $categorygroup['name'] ?></h4>
							</div>
							
							<div class="menu-left-contents">
								<ul>
									<?php
										foreach ($categorygroup['categories'] as $leftcategory)
										{
											?>
											<li class="level-<?= $leftcategory['level'].($current_category_id == $leftcategory['id'] ? ' selected' : '') ?>">
												<a class="<?= (PAGENAME == $leftcategory['pagename'] ? 'selected' : '') ?>" href="<?= URL_SITE ?><?= $leftcategory['pagename'] ?>/"><?= $leftcategory['linktitle'] ?></a>
											</li>
											<?php
										}
									?>
									<li class="level-0"><a href="<?= URL_SITE ?><?= $pages['allproducts']['pagename'] ?>/" class="<?= (PAGENAME == $pages['allproducts']['pagename'] ? 'selected' : 'allproducts') ?>"><?= $pages['allproducts']['linktitle'] ?></a></li>
								</ul>
							</div>
							
							<?php
						}
					?>
					
					
					<?php
						if (sizeof($leftmenumanufacturers) > 0)
						{
							?>
								<div class="menu-left-header">
									<h4>Browse Brands</h4>
								</div>
								
								<div class="menu-left-contents">
								<ul>
									<?php									
									foreach ($leftmenumanufacturers as $leftmanufacturer)
									{
										?>
										<li><a href="<?= URL_SITE ?><?= $leftmanufacturer['pagename'] ?>/"><?= $leftmanufacturer['linktitle'] ?></a></li>
										<?php
									}
									?>
								</ul>
								</div>
							<?php
						}
					?>
					
					
					<?php
						if (is_array($sidebarfilters))
						{
							?>
								<div class="menu-left-header">
									<h4><?= gTT('MAIN_FILTER_TITLE') ?> - <a href="<?= URL_SITE ?><?= $pages['filterproducts']['pagename'] ?>/"><?= gTT('MAIN_FILTER_MORE') ?></a></h4>
								</div>
							
								<div class="menu-left-contents">
								<form action="<?= URL_SITE ?>filter-products/" method="post" id="sidefilterform">
									<div id="sidefilteroptions">
										<?php
										foreach ($sidebarfilters as $key => $item)
										{
										if ($key === 'filterprices')
										{
											?>
												<div class="sidefilteroption">
												<label for="side-filterprice"><strong><?= gTT('MAIN_FILTER_PRICE') ?>:</strong></label>
												
												<select name="filterprice" id="side-filterprice">
													<option value="-1"><?= gTT('MAIN_FILTER_ANY') ?></option>
													<?php
														$filterprices = $item;
														foreach ($filterprices as $key => $item)
														{
															?>
															<option value="<?= $item['start'].'|'.$item['end'] ?>"<?= $_SESSION['productfilters']['filterprice'] == $item['start'].'|'.$item['end'] ? ' selected' : '' ?> ><?= $item['displayvalue'] ?></option>
															<?php
														}
													?>
												</select>
												</div>
												
											<?php
											
										}
										else if ($key === 'filtermanufacturer')
										{
											?>
												<div class="sidefilteroption">
												<label for="side-filtermanufacturer"><strong><?= gTT('MAIN_FILTER_MANUFACTURER') ?>:</strong></label>

												<select name="filtermanufacturer" id="side-filtermanufacturer">
													<option value="-1"><?= gTT('MAIN_FILTER_ANY') ?></option>
													<?php
														$filtermanufacturers = $item;
														foreach ($filtermanufacturers as $key => $item)
														{
															?>
															<option value="<?= $item['id'] ?>"<?= $_SESSION['productfilters']['filtermanufacturer'] == $item['id'] ? ' selected' : '' ?> ><?= $item['linktitle'] ?></option>
															<?php
														}
													?>
												</select>
												</div>
				
											<?php
										}
										else
										{
										?>
													
												<div class="sidefilteroption">
													<?php
														if ($item['valuetype'] == 'checkbox')
														{
															?>
															<strong><?= $item['displayname'] ?></strong> - <a href="#" onclick="unCheck($('sidefilterform'), '<?= $item['originalname'] ?>'); return false;">Reset</a><br />
															<?php
														
															$i = 0;
															foreach ($item['values'] as $valuekey => $valueitem)
															{
																?>
																
																<span class="sidefiltercheckbox">
																	<input type="checkbox" id="<?= $item['originalname'].$i ?>" name="<?= $item['originalname'] ?>[]" value="<?= $valueitem['value'] ?>" onclick="checkForAllTicked(<?= $item['originalname'] ?>, $(all<?= $item['originalname'] ?>))" <?= $_SESSION['productfilters'][$item['originalname']][$valueitem['value']] ? ' checked' : '' ?> />
																	<label for="<?= $item['originalname'].$i ?>"><?= $valueitem['value'].$item['units'] ?></label>
																</span>
																<br />
																<?php
																$i++;
															}
														}
														else if ($item['valuetype'] == 'dropdown')
														{
															?>
															<label for="side-<?= $item['originalname'] ?>"><strong><?= $item['displayname'] ?></strong></label>
															<select name="<?= $item['originalname'] ?>" id="side-<?= $item['originalname'] ?>">
																<option value="-1">Any</option>
																<?php
																foreach ($item['values'] as $valuekey => $valueitem)
																{
																	?>
																	<option value="<?= $valueitem['value'] ?>"<?= $_SESSION['productfilters'][$item['originalname']] == $valueitem['value'] ? ' selected' : '' ?> ><?= $valueitem['value'] ?></option>
																	<?php
																}
																?>
															</select>
															<?php
														}
														else if ($item['valuetype'] == 'yesorno')
														{
															?>
															<label for="side-<?= $item['originalname'] ?>"><strong><?= $item['displayname'] ?></strong></label>
															<select name="<?= $item['originalname'] ?>" id="side-<?= $item['originalname'] ?>">
																<option value="-1">Any</option>
																<?php
																foreach ($item['values'] as $valuekey => $valueitem)
																{
																	?>
																	<option value="<?= $valueitem['value'] ?>"<?= $_SESSION['productfilters'][$item['originalname']] == $valueitem['value'] ? ' selected' : '' ?> ><?= $valueitem['value'] == '1' ? 'Yes' : 'No' ?></option>
																	<?php
																}
																?>
															</select>
															<?php
														}
													?>
													</div>
										
										<?php	
										
											}		
										}
										?>
										
										<input type="submit" value="<?= gTT('MAIN_FILTER_BUTTON') ?>" id="sidefilteroptionssubmit" />
										<?php
											if ($_SESSION['productfilters'])
											{
												?>
													<br /><br /><a href="<?= URL_SITE ?><?= $pages['filterproducts']['pagename'] ?>/cancel/"><img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/icons/delete.png" /><?= gTT('MAIN_FILTER_REMOVE') ?></a>
												<?php
											}
										?>
										
									</div>
								</form>
								</div>
								<?php
						}
					?>
					
					
					<?php
						foreach ($sideboxes as $sidebox)
						{
							require('elements/sidebox_'.$sidebox['type'].'.php');
						}
					?>
					
					<?= getBannerHTML('side_image') ?>
					
					<div id="sideamazonlogo">
						<img src="<?= URL_SITE ?>templates/<?= TEMPLATE_FOLDER ?>/images/amazon_logo_<?= strtolower($amazon->locale) ?>.gif" alt="<?= SITE_NAME ?> is brought to you in association with Amazon" title="<?= SITE_NAME ?> is brought to you in association with Amazon" />
					</div>
									
				</div>
				
				<br class="clearall" />
							
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
