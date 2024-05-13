
<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

class Plan
{
    function calculaPlano($valor, $numPagamentos)
    {
        $credito = $valor;
        $numPrest = $numPagamentos;
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
        }
        $planoPagamento['currentDate'] =  Carbon::now()->format('d-m-y');
        $planoPagamento['cost'] = 10;

        return $planoPagamento;
    }
}
?>