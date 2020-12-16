<?php
for ($i=0;$i<15;$i++){
    $numero=rand(1,100);
    $vetor[$i]=$numero; 
	                     
}
for ($i=0;$i<15;$i++){
	echo "A posição do vetor é: ".$vetor[$i];
	if($vetor[$i]% 2 == 0){
		echo " Número Par "."<br>";
	}
    else{
    	echo " Número Impar"."<br>";                                                                                   
    }
}
?>