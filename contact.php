<h2 class="page-title">Contact the <?= SITE_NAME ?> Team</h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<h3 class="page-subtitle">Email <?= SITE_NAME ?></h3>
<p><em>All of the fields are optional but please enter as much detail as you can.</em></p>

<div class="contact-form">
	<form action="<?= URL_SITE.PAGENAME ?>/" method="post" id="contactform">
		<table class="contact-table">
			<tr>
				<td><label for="contact-fullname">Name:</label></td>
				<td><input class="text" id="contact-fullname" name="fullname" /></td>
			</tr>
			<tr>
				<td><label for="contact-email">Email Address:</label></td>
				<td><input class="text" id="contact-email" name="email" /></td>
			</tr>
			<tr>
				<td><label for="contact-phone">Phone Number:</label></td>
				<td><input class="text" id="contact-phone" name="phone" /></td>
			</tr>
			<tr>
				<td><label for="contact-query">Your Query:</label></td>
				</td><textarea id="contact-query" name="query" rows="15" cols="40"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="submit" type="submit" value="Send" /></td>
			</tr>
	</form>
</div>
