
<?php

require 'vendor/autoload.php';
require_once 'models/Plan.php';

use Carbon\Carbon;

class PlanController
{
    function __construct()
    {
        if (!isLoggedIn()) {
            header('Location:index.php');
        }
    }

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

        require 'views/plan/show.php';
    }
}
?>