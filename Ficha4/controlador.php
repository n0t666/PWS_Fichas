
    <?php
    require 'vendor/autoload.php';
    require 'modeloplano.php';

    use Carbon\Carbon;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require 'vistaformulario.php';
    } else {

        require_once 'modeloplano.php';


        $valor = $_POST['credito'];
        $numPagamentos =  $_POST['numPrest'];
        $custo = 10;

        $planoPagamento = calculaPlano($valor, $numPagamentos);

        $numLinhas = count($planoPagamento);
        $numColunas = count($planoPagamento[0]);

        $currentTime = Carbon::now()->format('d-m-Y');

        require 'vistaplano.php';
    }
    ?>

