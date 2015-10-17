<?php
 //arquivo de funções

function retangulo($lado1, $lado2){

	$p = 2 * ($lado1 + $lado2);
	return $p;

}

function quadrado($lado){
	$p = 4 * $lado;
	return $p;

}

function paralelogramo($lado1, $lado2){

	$p = 2 * ($lado1 + $lado2);

	return $p;
}

function trapezio($lado1, $lado2, $lado3, $lado4){
	$p =$lado1+$lado2+$lado3+$lado4;
	return $p;
}

function calculaPerimetro($tipo, $valores){
	extract($valores);

	switch ($tipo) {
		case 'quadrado':
			$resultado = $tipo($lado1);
			break;

		case 'retangulo':
			$resultado = $tipo($lado1, $lado2);
			break;

		case 'paralelogramo':
			$resultado = $tipo($lado1, $lado2);
			break;

		case 'trapezio':
			$resultado = $tipo($lado1, $lado2, $lado3, $lado4);
			break;
		
		default:
			$resultado = "não encontrou a função";
			break;
	}

	return $resultado;
}
	
?>