<?php

//instanciando a classe da conexão
$conn= new mysqli("localhost","root","root","dbphp7");

//verificando se a conexão funcionou
if($conn->connect_error)
{
    echo"Error ".$conn->connect_error;
}


//preparando a query para ser executada
$stmt=$conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(?,?)");

//Passando os parametros que serão substituidos
$stmt->bind_param("ss",$usuario,$senha);

//o php não acusa erro, pois só vai verificar se essas variaveis existem no momemento da execução
$usuario="user";
$senha="12345";

//executando query
$stmt->execute();

//inserindo outro usuário em seguida
$usuario="root";
$senha="senha";

//executando novamente
$stmt->execute();


?>