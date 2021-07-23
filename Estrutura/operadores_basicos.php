<?php

//operador de atribuição
$nome = 'Andre';
echo "<br>";
echo $nome;

//operador composto de atribuição

//concatenando
$nome .=" Luis";
echo "<br>";
echo $nome;

//somando ao valor total
$valorTotal=0;
$valorTotal+=20;
$valorTotal+=30;

echo'<br>';
echo $valorTotal;

echo'<br>';
//subtraindo do valor total
$valorTotal-=40;
echo $valorTotal.'<br>';

//Operadores aritméticos
$a=10;
$b=5;
echo "<b>A</b> vale ".$a." e <b>B</b> vale ".$b;

$resultado=$a+$b;
echo"<br> Soma: ".$resultado;

$resultado=$a-$b;
echo"<br> Subtração: ".$resultado;

$resultado=$a*$b;
echo"<br> Multiplicação: ".$resultado;

$resultado=$a/$b;
echo"<br> Divisão: ".$resultado;

$resultado=$a%$b;
echo"<br> Módulo: ".$resultado;

$resultado=$a**$b;
echo"<br> Exponenciação: ".$resultado;


//Operador de comparação

echo"<br>";
//maior
var_dump($a > $b);

echo"<br>";
//menor
var_dump($a < $b);

echo"<br>";
//igual valor
var_dump(55 == 55.0);

echo"<br>";
//igual valor e tipo (idêntico)
var_dump(55 === 55.0);

echo "<br>";
//não igual ou diferente (valor)
var_dump(55 != 55.0);

echo "<br>";
//não igual ou diferente (tipo e valor)
var_dump(55 !== 55.0);

?>