<?php

$a=10;

//passagem de parametros por valor
function trocaValor($b)
{
    $b+=50;
    return $b;
}

function trocaReferencia(&$b)
{
    $b+=50;
    return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;


echo"<br>";
echo trocaReferencia($a);
echo "<br>";
echo $a;

//referencia de memória no array
$pessoa = array(
    'nome'=>'André',
    'idade'=>19
);
echo "<br>";

foreach($pessoa as &$value)
{
    if(gettype($value)==='integer') $value+=10;
    echo "<br>".$value;
}

echo"<br>";
print_r($pessoa);

?>