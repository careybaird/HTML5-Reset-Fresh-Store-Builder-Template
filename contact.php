<h2 id="page-title"><?=sprintf(gTT('CONTACT_TITLE'), SITE_TITLE)?></h2>
<div id="page-maintext"><?= $page['maintext'] ?></div>
<div class="clear"></div>

<h3 class="page-subtitle"><?=sprintf(gTT('CONTACT_SUBTITLE'), SITE_TITLE)?></h3>
<p><em><?=gTT('CONTACT_OPTIONAL')?></em></p>

<div class="contact-form">
	<form action="<?= URL_SITE.PAGENAME ?>/" method="post" class="contact-form">
		<table class="contact-table">
			<tr>
				<td><label for="contact-fullname"><?=gTT('CONTACT_NAME')?>:</label></td>
				<td><input class="text" id="contact-fullname" name="fullname" /></td>
			</tr>
			<tr>
				<td><label for="contact-email"><?=gTT('CONTACT_EMAIL')?>:</label></td>
				<td><input class="text" id="contact-email" name="email" /></td>
			</tr>
			<tr>
				<td><label for="contact-phone"><?=gTT('CONTACT_PHONE')?>:</label></td>
				<td><input class="text" id="contact-phone" name="phone" /></td>
			</tr>
			<tr>
				<td><label for="contact-query"><?=gTT('CONTACT_QUERY')?>:</label></td>
				<td><textarea id="contact-query" name="query" rows="15" cols="40"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="submit" type="submit" value="Send" /></td>
			</tr>
		</table>
	</form>
</div>
