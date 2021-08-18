<?php

function teste_Sessao()
{
    switch(session_status())
    {
        case PHP_SESSION_DISABLED:
            echo"<br>As sessões estão desabilitadas"; 
            break;

        case PHP_SESSION_NONE:
            echo"<br>As sessões estão habilitadas, mas nenhuma existe";
            break;

        case PHP_SESSION_ACTIVE:
            echo"<br>As sessões estão habilitadas e uma existe";
            break;
    }
}


//exibe onde as sessoes são salvas 
echo session_save_path().'<br>';

//sessão desabilitada
teste_Sessao();
echo"<br>".session_status();

//sessão habilitada e uma existe
session_start();
teste_Sessao();
echo"<br>".session_status();




?>