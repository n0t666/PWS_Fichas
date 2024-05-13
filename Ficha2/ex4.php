<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $cap1 = 'Capítulo 1';
    $cap2 = 'Capítulo 2';
    $cap3 = 'Capítulo 3';

    $tituloPagina = 'Índice';
    $versao = '1.0';
    ?>

    <h1><?= $tituloPagina ?></h1>
    <h2><?= "Versão $versao" ?></h2>
    <ul>
        <li><a href="capitulo1.php"><?= $cap1 ?></a></li>
        <li><a href="capitulo2.php"><?= $cap2 ?></a></li>
        <li><a href="capitulo3.php"><?= $cap3 ?></a></li>
    </ul>

</body>

</html>