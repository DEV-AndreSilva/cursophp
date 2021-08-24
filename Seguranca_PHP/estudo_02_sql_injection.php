<?php
//Exemplo de teste (id=1 OR 1=1 --)
//Retorna a informação de todos os usuários do sistema

$id = (isset($_GET['id'])) ?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id)>5)
{
    exit("Pegamos você");
}

$conn= new mysqli("localhost","root","root","dbphp7");
$result =$conn->query("Select * from tb_usuarios where idusuario = $id");


while($resultado = mysqli_fetch_assoc($result))
{
    echo json_encode($resultado);
}
//A melhor prática é usar os BindParam  da classe PDO

