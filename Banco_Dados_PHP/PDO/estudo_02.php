<?php
//para utilizar o SQL server com o PHP é necessário baixar algumas extenções

//instanciando conexão PDO
$conn= new PDO("sqlsrv:Database=dbphp7;server=localhost\SQL_EXPRESS; ConnectingPooling=0","root","root");

$stmt=$conn->prepare("Select * from tb_usuarios order by deslogin");

$stmt->execute();

$results=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row)
{
    foreach($row as $key => $value)
    {
        echo "<strong>".$key."</strong> ".$value."<br>";
    }
    echo "===========================================================<br>";
}

