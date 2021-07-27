<?php

function teste($callback)
{
    //Processo lento
    $callback();
}

//exemplo 1
//função anonima - (não possui nome nem retorno)
teste(function(){
    echo '<br>terminou<br>';
});

//exemplo 2
//Função anonima
$fn=function($valor)
{
    var_dump($valor);
};

$nome="André";

$fn($nome);
?>