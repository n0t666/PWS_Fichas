
<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

class PlanController
{
    public function index()
    {
        require_once 'views/plan/index.php';
    }

    public function show()
    {
        $valor = $_POST['credito'];
        $numPagamentos =  $_POST['numPrest'];
        $plan = new Plan();
        $planoPagamento = $plan->calculaPlano($valor, $numPagamentos);

        require '/views/show.php';
    }
}
?>