<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ministério da Defesa!</title>
    <style>
    body {
        padding: 20px;
        0 px;
        font-family: 'Open Sans', sans-serif;
    }

    .logo {
        margin-top: 20px;
        margin-left: 46%;
    }
    </style>
</head>

<body class="container">
    <div class="card text-center">
        <img class="logo img-fluid" width="100" src="assets/img/logo.png" alt="Ministério da Defesa">
        <div class="card-body">
            <h5 class="card-title">Gerência de Sistemas e Inovação - GESIS</h5>
            <p class="card-text">Imagem Base utilizada pelo Ministério da Defesa.</p>
            <a href="https://github.com/leonardofaria00/httpd-base" target="_blank" class="btn btn-primary">Ir para o
            repositório</a>
            <a href="index.html" class="btn btn-default">Voltar</a>
        </div>
    </div>
    <section class="card">
        <article class="text-center">
            <span class="font-weight-bold">Host:</span> <?= $_SERVER['HTTP_HOST']?>
            <br>
            <span class="font-weight-bold">Apache Version:</span> <?= $_SERVER['SERVER_SOFTWARE']?>
        </article>
        <div class="card-footer text-muted text-center">
            <span class="font-weight-bold">Date:</span> <?= date('m/d/Y h:i', time());?>
        </div>
    </section>
</body>

</html>

<?php

    // Show all information, defaults to INFO_ALL
    phpinfo();

?>