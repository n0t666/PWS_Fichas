
<?php


class PlanController extends Controller
{
    public function index()
    {
        require_once 'views/plan/index.php';
    }

    public function show()
    {
        $valor = $this->getHTTPGetParam('credits');

        $numPagamentos =  $this->getHTTPGetParam('nmrPrest');
        $plan = new Plan();
        $planoPagamento = $plan->calculaPlano($valor, $numPagamentos);

        $viewData = [
            'planoPagamento' => $planoPagamento,
            'valor' => $valor,
            'numPagamentos' => $numPagamentos
        ];

        $this->renderView('plan', 'show', $viewData);
    }
}
?>