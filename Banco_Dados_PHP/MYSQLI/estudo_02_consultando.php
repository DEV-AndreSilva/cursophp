<?php
//instanciando a classe da conexão
$conn= new mysqli("localhost","root","root","dbphp7");

//verificando se a conexão funcionou
if($conn->connect_error)
{
    echo"Error ".$conn->connect_error;
}

//comando direto ao banco de dados
$result = $conn->query("select * from tb_usuarios order by deslogin");

$data=array();

//transforma cada resultado da consulta em um array e atribuindo a variavel $row
while($row = $result->fetch_array(MYSQLI_ASSOC)) // ou fetch_assoc()
{
    print_r($row);
    echo "<br>";
    array_push($data,$row);
}

//transformando arquivo em json
echo "<br>".json_encode($data);