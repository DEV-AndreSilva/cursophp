<?php
session_start();

//Depois da verificação de login e senha reinicie o Id da sessão
session_destroy();

//Inicia Sessão novamente
session_start();

//Altera o Id para evitar ataques
session_regenerate_id();

echo session_id();