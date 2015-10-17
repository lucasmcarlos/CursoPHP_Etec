<?php

include "funcoes.php";


echo "retangulo = ". retangulo(10, 20) ."<Br>";

echo "quadrado = ". quadrado(10). "<br>";

echo "paralelogramo =". paralelogramo(10, 20) ."<br>";

echo "trapezio = ".trapezio(10, 10, 10, 40);
	
echo "resultado  = ".calculaPerimetro("trapezio", array('lado1' => 10, 'lado2' => 20, 'lado3' => 10,'lado4' => 20));
?>