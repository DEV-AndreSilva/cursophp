<form method="POST">
    <input type="text" name="busca">
    <input type="submit" name="enviar" value="enviar">
</form>

<?php
if(isset($_POST['busca']))
{
    //Escapa a string como um texto, removendo as tags, possui execeção
    echo strip_tags($_POST['busca']);
    //Escapa a tag como string
    echo htmlentities($_POST['busca']);
}
