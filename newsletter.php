<h2 class="page-title">The <?= SITE_NAME ?> Newsletter</h2>
<div class="main-text"><?= $page['maintext'] ?></div>

<p>Simply enter your email below to receive our Newsletter.</p>

<form action="<?= URL_SITE ?>newsletter/" method="post">
	<input type="hidden" name="newsletter_action" value="subscribe" />
	
	<p>
		<label for="newsletter_sub_email">Email: </label>
		<input class="text" type="text" id="newsletter_sub_email" name="newsletter_email" value="<?= $email ?>" />
	</p>
	
	<p><input class="submit" type="submit" value="Join" /></p>
</form>

<br clear="all" />

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
