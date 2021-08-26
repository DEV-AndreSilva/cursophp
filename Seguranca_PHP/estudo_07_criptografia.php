<?php

//Forma de enviar uma mensagem, protegendo seu conteúdo

define('SECRET_IV',pack('a16','senha'));
define('SECRET',pack('a16','senha'));

$data = [ "nome"=>"André"];

$openssl= openssl_encrypt(
    json_encode($data), //o que vai ser encriptografado
    'AES-128-CBC',//algoritmo de encriptação
    SECRET, //chave
    0, //lista de opçoes da forma de retorno
    SECRET_IV 
);

echo $openssl;

//Descriptografia de arquivo
$string=openssl_decrypt($openssl,'AES-128-CBC',SECRET,0,SECRET_IV);

var_dump(json_decode($string,true));

