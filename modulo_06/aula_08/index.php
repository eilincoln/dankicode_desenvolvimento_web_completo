<?php

    
    // $array1 = array("chave1"=>"valor1","chave2"=>"valo2");
    // $array2 = array("chave3"=>"valor3","chave4"=>"valo4");
    // // Serve para juntas os arrays que eu quero.
    // $result = array_merge($array1, $array2);
    // print_r($result);


    $array1 = array("chave1"=>"valor1","chave2"=>"valo2");
    $array2 = array("chave1"=>"valor3","chave4"=>"valo4");
    // serve para poder mostrar se tem algum valor com a mesma chave
    print_r(array_intersect_key($array1, $array2));


?>