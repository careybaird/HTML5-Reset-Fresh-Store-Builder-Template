<?php
	$messages = getMessages();

	if ($messages)
		foreach ($messages as $message)
		{
			?>
			<div class="message-<?= $message['type'] ?>"><?= $message['message'] ?></div>
			<?php
		}
