<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title><?= $page_title ?></title>
		
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<meta http-equiv="content-language" content="en" />
		<meta name="keywords" content="<?= $page_keywords ?>" />
		<meta name="description" content="<?= $page_description ?>" />

		<?php
			if ($metanoindex)
			{
				?>
					<meta name="robots" content="noindex,follow" />
				<?php
			}
			else
			{
				?>
					<meta name="robots" content="index,follow" />
				<?php
			}
		?>

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
	<body<?= $body_onload ?> id="checkout">
		<?php
			if (ADMIN_LOGGED_IN && file_exists(PATH_TEMPLATES.TEMPLATE_FOLDER.'/elements/admin_stripe_'.$adminstripename.'.php'))
			{
				require('elements/admin_stripe_'.$adminstripename.'.php');
			}
		?>
	
		<div id="doc4">
				<?php
					if (ADMIN_LOGGED_IN)
					{
						require('elements/'.$editinplacename.'_editinplaceoptions.php');
					}
				?>
			
		
	
			<div id="main">
			
										
				<div id="content-full">
					
					
					<?php
						## Initialise Messages
						$messages = getMessages();
					
						if ($messages)
						{
							foreach ($messages as $message)
							{
								?>
								<div class="message-<?= $message['type'] ?>"><?= $message['message'] ?></div>
								<?php
							}
						}
					?>
					
					
				
					<?= $pagecontents ?>
					<?php
						if (ADMIN_LOGGED_IN && $editinplacename != '')
						{
							require('elements/'.$editinplacename.'_editinplacejs.php');
						}
					?>
				</div>
				
								
				<br class="clearall" />
							
			</div>
			
			
		</div>
		
				
	</body>
</html>