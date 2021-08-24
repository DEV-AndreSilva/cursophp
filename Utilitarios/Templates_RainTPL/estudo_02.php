<?php
//Load Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'config.php';

use Rain\Tpl;

// namespace

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);

Tpl::configure( $config );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "André Luis da Silva" );
$tpl->assign( "version", PHP_VERSION );


// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$html =$tpl->draw( "index",true );


//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;

$mail->Username = USER;
$mail->Password = PASSWORD;


$mail->setFrom(USER, 'Teste email andre');

$mail->addAddress('andreluis2608@gmail.com', 'Andre');

$mail->Subject = utf8_decode('PHPMailer Teste André');

$mail->msgHTML($html);

$mail->AltBody = 'Esse é o altbody';

if (!$mail->send()) {
    echo 'Falha ao enviar email: ' . $mail->ErrorInfo;
} else {
    echo 'Email enviado!';

}