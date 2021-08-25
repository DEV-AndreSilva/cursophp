<?php
//Inclusão do arquivo com as constantes de chave do google reCAPTCHA
require "config.php";

if(isset($_POST['inputEmail']))
{
    $email= $_POST['inputEmail'];

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(array(
        "secret"=>SECRETKEY,
        "response"=>$_POST["g-recaptcha-response"],
        "remoteip"=>$_SERVER["REMOTE_ADDR"]
            )
        )
    );

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    $recaptcha=json_decode(curl_exec($ch),true);

    if($recaptcha["success"]===true)
    {
        echo "OK ".$_POST["inputEmail"];
    }
    else
    {
        header("Location: estudo_04_recaptcha.php");
    }
}

