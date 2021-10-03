<?php
    session_start();
    $PAGE = $_GET['p'] ?? 'mainpages/magunkrol';
    require_once 'private/lib/require.php';
    lib(['database/config', 'database/database', 'utils/request']);
?>

<html lang="hu">
    <head>
        <title>Pizzazo</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet'
              integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf'
                crossorigin='anonymous'></script>

        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <header><?php @include_once 'private/components/header.php'; ?></header>
        <nav><?php require_once 'private/components/nav.php'; ?></nav>
        <main><?php require_once 'private/lib/router.php'; ?></main>
        <footer><?php @include_once 'private/components/footer.php'?></footer>
    </body>
</html>
