<?php
//constantes armazenam valores que não se alteram durante a execução do programa

define("SERVIDOR","127.0.0.1");

echo SERVIDOR;

//array constante
define("BANCO_DE_DADOS",[
'host'=>'127.0.0.1',
'usuario'=>'root',
'password'=>1256,
'db_name'=>'DB_BANCO'
]);

echo"<pre>";
print_r(BANCO_DE_DADOS);
echo"</pre> <br>";

echo BANCO_DE_DADOS['host'];
echo "<br>";
//constante padrão
echo PHP_VERSION;
echo"<br>";

echo DIRECTORY_SEPARATOR;

