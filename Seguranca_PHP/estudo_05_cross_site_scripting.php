<form method="POST">
    <input type="text" name="busca">
    <input type="submit" name="enviar" value="enviar">
</form>

<?php
if(isset($_POST['busca']))
{
    //echo $_POST['busca'];
    //Escapa a string como um texto, pode receber excecoes, remove as tags
    echo strip_tags($_POST['busca'],"<strong><a>");
    echo htmlentities($_POST['busca']);
}
