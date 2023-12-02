<?php

	// Trabalhando com data e hora

	date_default_timezone_set('America/Sao_Paulo');

	function mostrarData(){
		$data = date('d/m/Y');
		echo $data;
	}

	function mostrarHora(){
		echo date('l jS \of F Y h:i:s A');
	}

	mostrarData();
	echo '<hr/>'
	mostrarHora();
?>