<?php
	//Aula 3 atividades.

//Exec 1;

echo "Usando While <br>";
$i = 1;
	while($i <= 100){
		if($i < 100){
			echo $i.",";	
		}else{
			echo $i;
		}

	$i++;
}

//Exec2
echo "<br><br>Usando For <br>";
for($i =1; $i<100; $i++){
		if($i < 100){
			echo $i.",";	
		}else{
			echo $i;
		}
}

//Exec 3

echo "<br><br> Somente os pares<br>";

$i = 1;
	while($i <= 100){

		if($i %2 == 0){
			if($i < 100){
				echo $i.",";	
			}else{
				echo $i;
			}
		}
	$i++;
}

//Exec 4

echo "<br><br>Tabuada do 5 <br>";
for($i =1; $i<=10; $i++){
			
		$resultado = 5 * $i;
		echo "5 X $i = $resultado <br>";

}

//Exec5.1
/*
Atribua a uma variavel um número inteiro e verifique o mês correspondente a esse número.
*/

$Num= 10;

if ($Num == 1) {
	echo "Janeiro";
}
elseif ($Num == 2) {
	echo "Fevereiro";
}
elseif ($Num == 3) {
	echo "Março";
}
elseif ($Num == 4) {
	echo "Abril";
}
elseif ($Num == 5) {
	echo "Maio";
}
elseif ($Num == 6) {
	echo "Junho";
}
elseif ($Num == 7) {
	echo "Julho";
}
elseif ($Num == 8) {
	echo "Agosto";
}
elseif ($Num == 9) {
	echo "Setembro";
}
elseif ($Num == 10) {
	echo "Outubro";
}
elseif ($Num == 11) {
	echo "Novembro";
}
elseif ($Num == 12) {
	echo "Dezembro";
}else{
	echo "Numero inválido";
}


//Exec 5.2
/*
	Forneça 4 notas para um aluno em variaveis, 
	calcule a media das notas e verifique se ele esta aprovado (igual ou acima de 7), exame (5 ou acima)
	reprovado (menor que 5);

*/

$notabim1 = 8;
$notabim2 = 7;
$notabim3 = 5;
$notabim4 = 8;
$media = ($notabim1 + $notabim2 + $notabim3 + $notabim4) /4;

if ($media >= 7 or $media ==10) {
	echo "Aprovado";
}	
elseif ($media >= 5) {
	echo "Exame";
}
else {
	echo "Reprovado";
}


?>