
<?php

require_once 'models/Plan.php';
require_once 'controllers/Controller.php';
require_once 'controllers/HomeController.php';

use Carbon\Carbon;

class PlanController extends Controller
{
    function __construct()
    {
        $this->authenticationFilter();
    }

    public function index()
    {
        $this->renderView('plan', 'index');
    }

    public function show()
    {
        $valor = $_POST['credito'];
        $numPagamentos =  $_POST['numPrest'];
        $plan = new Plan();
        $planoPagamento = $plan->calculaPlano($valor, $numPagamentos);

        $this->renderView('plan', 'show', ['planoPagamento' => $planoPagamento, 'valor' => $valor, 'numPagamentos' => $numPagamentos]);
    }
}
?>