<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>

<body>
    <?php
    require 'vendor/autoload.php';

    use Carbon\Carbon;


    $credito = 1000;
    $numPrest = 6;
    $valorPrest = $credito / $numPrest;
    $custo = 10;
    $restante = $credito;

    for ($i = 0; $i < $numPrest; $i++) {
        $data = Carbon::now()->addMonth($i)->toDateString();
        $restante -= $valorPrest;
        $planoPagamento[$i][0] =  $data;
        if ($i == 0) {
            $planoPagamento[$i][1] =  number_format($valorPrest + $custo, 2);
        } else {
            $planoPagamento[$i][1] =  number_format($valorPrest, 2);
        }
        $planoPagamento[$i][2] =  number_format($restante, 2);

        $numLinhas = count($planoPagamento);
        $numColunas = count($planoPagamento[0]);
    }
    ?>
    <h1>Plano de pagamento</h1>
    <h4>Valor a contrair: <?= number_format($credito, 2) ?></h4>
    <h4>Número de prestações: <?= $numPrest ?></h4>
    <h4>Data do empréstimo: <?= Carbon::now()->format('d-m-Y') ?></h4>

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
    <p>O valor da despesa do crédito é de <?= number_format($custo, 2) . "€ e encontra-se incluída na primeira prestação " . $planoPagamento[0][1]   ?></p>


</body>

</html>