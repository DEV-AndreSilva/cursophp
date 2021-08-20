<?php

//Array super global cookie
if(isset($_COOKIE['cookie_user']))
{
    //Acessando cookie
    $obj= json_decode($_COOKIE["cookie_user"],true);
    //Exibindo o valor dele
    print_r($obj);
}

?>