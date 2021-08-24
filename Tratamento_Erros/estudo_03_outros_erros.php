<?php
//Não mostrar os "Error"
error_reporting(E_ALL & ~E_ERROR);

/**
 * função Chamada quando ocorre erros
 *
 * @param string $code
 * @param string $message
 * @param string $file
 * @param string $line
 * @return string
 */
function trataErro($code,$message,$file,$line)
{
    echo json_encode(array(
        "codigo"=>$code,
        "message"=>$message,
        "linha"=>$line,
        "arquivo"=>$file
    ));
}

//Chamado quando erros tipo alertas e outros tipos de erro são chamados
set_error_handler("TrataErro");

//Erro de variavel não existente
echo $a;
$nome=$_GET['nome'];
