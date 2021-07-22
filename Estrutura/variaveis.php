<?php

//linguagem fracamente tipada, não te obriga a dizer o tipo de variavel antes declara-la

/**
 * @var string $nome
 */
$nome = "André";

//Exibe  a varivael na tela
echo $nome;
echo "<br>";

//informações da varivel
var_dump($nome);

//CamelCase
$anoNascimento=2001;
$nomeCompleto="André Luis da Silva";

//Apagando variavel em PHP
echo "<br>";
unset($nome);

//exibição de erro (Undefined variable $nome)
//echo $nome;

//verificando se a variavel existe
if(isset($nome))
{
    echo $nome;
}
else
{
    echo "A variavel não existe";
}


//Tipos de dados

////////////////////////////// Tipos Básicos ///////////////////////////////////////
//String
$nome="andre";
$site='www.hcode.com.br';

//Inteiro
$ano=1995;

//Float
$salario=2555.68;

//Bool
$bloqueado=false;

////////////////////////////// Tipos Compostos ///////////////////////////////////////

//Array
$frutas=array("abacaxi","uva","limão");

//Objeto
$nascimento = new DateTime();
echo"<br>";
var_dump($nascimento);

////////////////////////////// Tipos Especiais ///////////////////////////////////////
echo"<br>";

//Resource
$arquivo= fopen("historia",'r');
var_dump($arquivo);

//Nulo
$nulo=null;


