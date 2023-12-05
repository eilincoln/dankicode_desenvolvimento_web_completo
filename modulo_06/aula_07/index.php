<?php

	$nome = 'Joao';

	/*
	switch($nome) {
		case 'Lincoln':
			echo 'Minha variável é LINCOLN';
			break;
		case 'Joao':
			echo 'Minha variável é JOAO';
			break;
	}
	*/

	// Break é usado para poder quebrar páginas
	for($i = 0; $i < 10; $i++) {
		echo $i;
		echo '<hr>';
		if ($i == 5) {
			// code...
			break;
		}
	}




?>