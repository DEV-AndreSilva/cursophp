<?php // Recaptcha google
//Inclusão do arquivo com as constantes de chave do google reCAPTCHA
require "config.php";
?>
<html>
  <head>
    <title>Recaptcha exemplo de uso</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="validarRecaptcha.php" method="POST">
    <input type="email" name="inputEmail">
      <div class="g-recaptcha" data-sitekey=<?=SITEKEY?>></div>
      <br/>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>