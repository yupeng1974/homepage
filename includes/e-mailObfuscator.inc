<?php

// This is my e-mail obfuscator!
// it takes as its input an e-mail address w/ the @ symbol replaced by the character entity (&#064;)
// and emits a mailto link that is coded 'backwards' and then reversed with a style. 
// I don't think the calls to this can be 'harvested'.

	function Ob($addr) {
		$addDecode = str_replace("&#064;","@",$addr);
   	echo "<span class='reverse'><a \n                           href='&#109;&#097;&#105;&#108;&#116;&#111;:" . $addr . "'>" . strrev($addDecode) . "</a></span>";
	}

?>