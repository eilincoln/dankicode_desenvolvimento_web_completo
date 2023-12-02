<?php 
	
	//Como percorrer um array

	$arr = array('Lincoln', 'joao', 'felipe', 'Mario');

	foreach($arr as $key => $value) {
		echo $key;
		echo ' => ';
		echo $value;
		echo '<hr>';
	}



	$total = count($arr);

	for($i = 0; $i < $total; $i++){
		echo $arr[$i];
		echo '<br/>';
	}

?>