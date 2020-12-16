<?php
if($_POST["operacao"]== "soma"){
    soma();
}
elseif($_POST["operacao"]== "subtracao"){
    subtracao();  
}
elseif($_POST["operacao"]== "multiplicacao"){
    multiplicacao();
}
elseif($_POST["operacao"]== "divisao"){
    divisao();
}
function soma(){
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $soma= $num1+$num2;
    echo "A soma dos numeros é: ".$soma. "<br>";
}
function subtracao(){
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $subtracao= $num1-$num2;
    echo "A subtracao dos numeros é: ".$subtracao. "<br>";
}
function multiplicacao(){
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $multiplicacao= $num1*$num2;
    echo "A multiplicacao dos numeros é: ".$multiplicacao. "<br>";
}
function divisao(){
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $divisao= $num1/$num2;
    echo "A divisao dos numeros é: ".$divisao. "<br>";
}

