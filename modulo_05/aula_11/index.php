<?php

	// Operador de igualdade
	$a = 5;
	$b = '5';

	if ($a == $b) {
	    echo "Os valores são iguais.";
	} else {
	    echo "Os valores não são iguais.";
	}

	//Operador de identidade
	$c = 5;
	$d = '5';

	if ($c === $d) {
	    echo "Os valores e os tipos são iguais.";
	} else {
	    echo "Os valores ou os tipos não são iguais.";
	}

	// Operadores de Comparação (> , <, >=, <=):
	$x = 10;
	$y = 5;

	if ($x > $y) {
	    echo "$x é maior do que $y.";
	} else {
	    echo "$x não é maior do que $y.";
	}


	/*
	No PHP, os operadores de condição são fundamentais para controlar o fluxo do programa com base em avaliações lógicas. Eles são usados em estruturas de controle de fluxo, como condicionais (if, else if, else) e loops (while, for). Vamos explorar alguns dos operadores de condição mais comuns no PHP:

1. **Operador de Igualdade (==):**
   O operador de igualdade verifica se os valores dos dois operandos são iguais, sem considerar o tipo de dados. Por exemplo:

   ```php
   $a = 5;
   $b = '5';

   if ($a == $b) {
       echo "Os valores são iguais.";
   } else {
       echo "Os valores não são iguais.";
   }
   ```

   Neste caso, o script exibirá "Os valores são iguais", pois o operador de igualdade não leva em conta o tipo das variáveis.

2. **Operador de Identidade (===):**
   O operador de identidade verifica se os valores dos dois operandos são iguais e se os tipos de dados também são iguais. Por exemplo:

   ```php
   $a = 5;
   $b = '5';

   if ($a === $b) {
       echo "Os valores e os tipos são iguais.";
   } else {
       echo "Os valores ou os tipos não são iguais.";
   }
   ```

   Neste caso, o script exibirá "Os valores ou os tipos não são iguais", porque o operador de identidade leva em conta tanto os valores quanto os tipos das variáveis.

3. **Operadores de Comparação (> , <, >=, <=):**
   Esses operadores são usados para comparar valores numéricos. Por exemplo:

   ```php
   $x = 10;
   $y = 5;

   if ($x > $y) {
       echo "$x é maior do que $y.";
   } else {
       echo "$x não é maior do que $y.";
   }
   ```

   Aqui, o script exibirá "$x é maior do que $y".

4. **Operador de Não Igualdade (!=):**
   O operador de não igualdade verifica se os valores dos operandos são diferentes. Por exemplo:

   ```php
   $a = 10;
   $b = 5;

   if ($a != $b) {
       echo "Os valores são diferentes.";
   } else {
       echo "Os valores são iguais.";
   }
   ```

   O script exibirá "Os valores são diferentes".

5. **Operador de Não Identidade (!==):**
   O operador de não identidade verifica se os valores e os tipos dos operandos são diferentes. Por exemplo:

   ```php
   $a = 10;
   $b = '10';

   if ($a !== $b) {
       echo "Os valores ou os tipos são diferentes.";
   } else {
       echo "Os valores e os tipos são iguais.";
   }
   ```

   O script exibirá "Os valores ou os tipos são diferentes", porque os tipos das variáveis são diferentes.

Esses são apenas alguns dos operadores de condição essenciais no PHP. Utilizando esses operadores de maneira eficaz, você pode criar lógica condicional para controlar o fluxo do seu programa com base em diversas condições.

	*/
	
	$var1 = 'valor1';
	$var2 = 'valor2';
	$var3 = 'valor3';
	
	//Operador lógico 'E'
	if($var1 == $var3) && ($var1 == $var2){
		echo 'verdade';
	}

	


?>