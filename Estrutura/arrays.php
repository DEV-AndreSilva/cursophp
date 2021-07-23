<?php

//Criação de array

//array unidimensional = vetor
$frutas = array("Abacaxi","Limão","Melancia");

//array multidimensional
$carros[0][0]="GM";
$carros[0][1]="Cobalt";
$carros[0][2]="Onix";
$carros[0][3]="Camaro";

$carros[1][0]="Ford";
$carros[1][1]="Fiesta";
$carros[1][2]="Fusion";
$carros[1][3]="Eco Sport";

//exibindo um valor do array
echo $carros[0][3];
echo"<br>";
echo end($carros[1]);

//criando array
$pessoas=[];
array_push($pessoas,array('nome'=>'Glaucio',"idade"=>25));
echo "<br>";

//Transformando array em json
$json= json_encode($carros);

//Transformando o json em array novamente
$array=json_decode($json,true);

print_r($array);

?>