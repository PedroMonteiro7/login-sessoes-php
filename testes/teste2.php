<?php

    //recuperando a sessão criada
    session_start();

    echo session_id();

    // echo $nome;

    //exibindo dados de uma variável de sessão
    echo $_SESSION["nome"];

?>