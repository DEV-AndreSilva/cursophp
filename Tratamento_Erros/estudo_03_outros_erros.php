<?php

function TrataErro($code,$message,$file,$line)
{
    echo json_encode(array(
        "codigo"=>$code,
        "message"=>$message,
        "linha"=>$line,
        "arquivo"=>$file
    ));
}

//chamado quando erros tipo alertas e outros tipos de erro são chamados
set_error_handler("TrataErro");

echo 50/0;