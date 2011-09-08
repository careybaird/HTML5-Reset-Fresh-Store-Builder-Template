<h2 id="page-title"><?=sprintf(gTT('NEWSLETTER_TITLE'), SITE_TITLE)?></h2>
<div id="main-text"><?= $page['maintext'] ?></div>
<div class="clearall"></div>

<p><?=sprintf(gTT('NEWSLETTER_TEXT'), SITE_TITLE)?></p>

<form action="<?= URL_SITE ?>newsletter/" method="post" class="newsletter-form">
	<input type="hidden" name="newsletter_action" value="subscribe" />
	<p>
		<label for="newsletter_sub_email"><?=gTT('NEWSLETTER_EMAIL')?>: </label>
		<input class="text" type="text" id="newsletter_sub_email" name="newsletter_email" value="<?= $email ?>" />
	</p>
	<p>
		<input class="submit" type="submit" value="Join" />
	</p>
</form>

<?php
	# Move to another page
	/*

<h2>Leave Our Newsletter</h2>

<p>If you want to leave our Newsletter, simply enter your email below.</p>

<form action="/newsletter/" method="post">
<input type="hidden" name="newsletter_action" value="unsubscribe" />
<p><label for="newsletter_sub_email">Email: </label><input class="text" type="text" id="newsletter_sub_email" name="newsletter_email" /></p>

<p><input class="submit" type="submit" value="Leave" /></p>
</form>
*/
?>
