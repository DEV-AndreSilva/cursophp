<?php
//sub rotinas são funções que não retornam valores

//função que retorna uma string
function ola()
{
    return "Olá Mundo !!!<br>";
}

echo ola();
$frase=ola();

//função que retorna um numero com ponto flutuante
function salario()
{
    return 946.00;
}

echo "<br>José recebeu 3 salários: ".(3*salario());

//função com parametros
function email($corpo)
{
    return "<br><br>Você enviou um email:<br>corpo do email:<br> $corpo";
}

echo email("um belo e-mail esse aqui");

//função com parametro padrão, o parametro não é mais obrigatório pois vem com um valor padrão
function emailPadrao($corpo="Esse é um email padrão")
{
    return "<br><br>Você enviou um email:<br>corpo do email:<br> $corpo";
}

echo emailPadrao();
echo emailPadrao('Não é mais um email padrão');

//função com varios parametros, 2 opcionais e 1 obrigatório
//Os parametros Obrigatórios devem ser sempre os primeiros 
function emailComplexo($mensagem,$remetente="Andre",$destinatario="Cleber")
{
    return "<br><br>Remetente: $remetente<br>Destintario: $destinatario<br>Mensagem: $mensagem";
}

echo emailComplexo("Olá amigo, como você está?");


//recebendo os argumentos pelo array
function recebendo()
{
    $argumentos=func_get_args();
    return $argumentos;
}

echo"<br><br>";
var_dump(recebendo("Bom dia",10, true));
?>