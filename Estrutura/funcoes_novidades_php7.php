<?php

//recebera varios parametros do tipo inteiro
//declaração de tipos escalares
function soma(int ...$valores)
{
    return array_sum($valores);
}

//conversão do tipo de dado no retorno
function soma2(int ...$valores):string
{
    return array_sum($valores);
}

echo soma(2,5,2,5,10);
echo '<br>'.soma(5.5,5).'<br>';
var_dump(soma2(5,5,12));
