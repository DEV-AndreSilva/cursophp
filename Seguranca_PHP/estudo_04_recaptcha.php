
<html>
  <head>
    <title>Recaptcha exemplo de uso</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="cadastrar.php" method="POST">

    <input type="email" name="inputEmail">

      <div class="g-recaptcha" data-sitekey="6LdeIyAcAAAAAG0mmoVZwL2a-h3yIaf1m-eHHucl"></div>
      <br/>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>