<?php

    //criando uma sessão
    session_start();

    //verificando o ID sessão
    echo session_id();

    //criando variáveis de sessão
    $_SESSION["nome"] = "Pedro Monteiro";

    $nome = "Pedro Monteiro";

    echo $nome;

?>