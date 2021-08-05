<?php
// PHP Data Object = PDO

//instanciando conexão PDO
$conn= new PDO("mysql:dbname=dbphp7;host=localhost","root","root");

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

