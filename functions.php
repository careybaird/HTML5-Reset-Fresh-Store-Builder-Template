<?php

	// Clears floats if loop is at the end of a row
	function clearAll($i, $break = PRODUCTLISTING_ROW_COUNT)
	{
		if(!is_numeric($break)) $break = 4;
		if ($i % $break == 0) echo '<div class="clearall"></div>';
	}
