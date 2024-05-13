<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>

<body>
    <h1>Plano de pagamento</h1>
    <h4>Valor a contrair: <?= number_format($valor, 2) ?></h4>
    <h4>Número de prestações: <?= $numPagamentos ?></h4>
    <h4>Data do empréstimo: <?= $currentTime ?></h4>

    <table border="1">
        <tr style="background-color: lightgray;">
            <th>Nº Prest</th>
            <th>Data</th>
            <th>Valor Prest.</th>
            <th>Valor em Dívida</th>
        </tr>

        <?php

        for ($i = 0; $i < $numLinhas; $i++) {
            echo '<tr>';
            echo '<td style="background-color: lightgray">' . ($i + 1) . '</td>';
            for ($j = 0; $j < $numColunas; $j++) {
                echo '<td>' . $planoPagamento[$i][$j] . '</td>';
            }
        }
        ?>

    </table>
    <p>O valor da despesa do crédito é de <?= number_format($custo, 2) . "€ e encontra-se incluída na primeira prestação " ?></p>
    <a href="../controllers/logoutController.php">Logout</a>
</body>

</html>