<?php

//Verificando se foi feita uma requisição POST
if($_SERVER["REQUEST_METHOD"]==="POST")
{

    //Escapando comando com caracteres especiais de forma que não seja interpretado pela função system
    $cmd=escapeshellcmd($_POST['cmd']);
    echo $cmd."<br>";

    //Transformando os comando recebidos em string
    $cmd=escapeshellarg($_POST['cmd']);
    echo $cmd;

    //Executando o comando de sistema
    $comando = system($cmd,$retorno);
    
}
?>

<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>
