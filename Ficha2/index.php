<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 2</title>
</head>

<body>
    <?php

    $protocolo = 'https://';
    $dominio = 'www.ipleiria.pt';
    $caminho = '/estudar/cursos/tesp/';

    $url = $protocolo . $dominio . $caminho;

    $num1 = 10;
    $num2 = 5;

    ?>
    <a href="<?php echo $url; ?>"><?= $url ?></a>
    <p><?= '$num1(' . $num1 . ') + $num2(' . $num2 . ') = ' . $num1 + $num2  ?></p>
    <p><?= '$num1(' . $num1 . ') * $num2(' . $num2 . ') = ' . $num1 * $num2  ?></p>
    <p><?= '$num1(' . $num1 . ') - $num2(' . $num2 . ') = ' . $num1 - $num2  ?></p>
    <p><?= '$num1(' . $num1 . ') / $num2(' . $num2 . ') = ' . $num1 / $num2  ?></p>
    ?>
</body>

</html>