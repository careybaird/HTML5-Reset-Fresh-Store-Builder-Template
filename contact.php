<h2 class="page-title">Contact the <?= SITE_NAME ?> Team</h2>
<div class="page-maintext"><?= $page['maintext'] ?></div>

<hr />

<h2>Email <?= SITE_NAME ?></h2>
<p><em>All of the fields are optional but please enter as much detail as you can.</em></p>

<div id="contact-form">
	<form action="<?= URL_SITE.PAGENAME ?>/" method="post" id="contactform">
	
		<p>
			<label for="contact-fullname">Name:</label>
			<input class="text" id="contact-fullname" name="fullname" />
		</p>
		
		<p>
			<label for="contact-email">Email address:</label>
			<input class="text" id="contact-email" name="email" />
		</p>
		
		<p>
			<label for="contact-phone">Phone Number:</label>
			<input class="text" id="contact-phone" name="phone" />
		</p>
		
		<p>
			<label for="contact-query">Your Query:</label>
			<textarea id="contact-query" name="query" rows="15" cols="40"></textarea>
		</p>
		
		<p>
			<input class="submit" type="submit" value="Send" />
		</p>
	</form>
	
	<br class="clearall" />
</div>
