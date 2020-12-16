<?php
$produto=1;
$soma=0;
for ($i=0;$i<15;$i++){
    $numero=rand(1,10000);
    $vetor[$i]=$numero;
    $soma= $soma=$vetor[$i];
    $produto = $produto * $vetor[$i];
}
$maior = $vetor[0];
$menor = $vetor[0];
for ($i=0;$i<15;$i++){
	echo "o numero é: ".$vetor[$i]."<br>";
	if ($vetor[$i] > $maior){
		$maior = $vetor[$i];
	}
	if ($vetor[$i] > $menor){
		$menor = $vetor[$i];
	}
}
echo "o maior numero é: ".$maior."<br>";
echo "o menor numero é: ".$menor."<br>";
echo "o produto deles é:".$produto."<br>";

$media=$soma/20;
echo "o média é: ".$media."<br>";
?>




