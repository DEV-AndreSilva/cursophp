<?php

//Tenta executar o conteudo, caso de erro executa o catch
try
{
    //Lançando uma exceção e seu código
    throw new Exception("Erro ao processar a requisição",1);
}
catch(Exception $e)
{
    //Exibe os dados da exceção
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}