<?php

	if (GOOGLEANALYTICS_REFERENCE != '')
	{
		?>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		var pageTracker = _gat._getTracker("<?= GOOGLEANALYTICS_REFERENCE ?>");
		pageTracker._initData();
		pageTracker._trackPageview();
		
		<?php
		/*
		new Ajax.Request('/ajax/analyticslocal.php?1=<?= urlencode($pagetype) ?>&2=<?= urlencode(PAGENAME) ?>&3=<?= urlencode($_SERVER['SCRIPT_URI']) ?>&4=<?= urlencode((isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '')) ?>');
		*/
		?>
		
		</script>
		<?php
	}

	#ÊRaven Conversion Tracking
	if (RAVEN_ID != '' && RAVEN_CONVERSION_CODE != '' && $pagetype == 'checkout')
	{
		?>
		<script type="text/javascript">
		var ravenConversion = "FEA0D688";
		var ravenConversionValue = "<?= $amazon->cart['subtotal']/100 ?>";
		</script>
		<?php
	}
	
	#ÊRaven Analytics
	if (RAVEN_ID != '' && true == false)
	{
		?>
		<script type="text/javascript">
		var ravenProt = (("https:" == document.location.protocol) ? "https://" : "http://");
		document.write(unescape("%3Cscript src='" + ravenProt + "raven-seo-tracker.com/rt.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		var ravenTracker = _raven._init("<?= RAVEN_ID ?>");
		ravenTracker._track();
		</script>		
		<?php
	}

?>