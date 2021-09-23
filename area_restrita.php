<?php

session_start();

require("./funcoes.php");

verificarLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="area_restrita.css">
    <title>Área Restrita</title>
</head>
<body>
    <img src="warning.png" alt="">
    <h1>ÁREA RESTRITA</h1>
</body>
</html>