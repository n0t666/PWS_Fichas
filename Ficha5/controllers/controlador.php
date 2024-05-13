
    <?php
    require '../vendor/autoload.php';
    require '../models/modeloplano.php';
    require_once '../models/auth.php';

    use Carbon\Carbon;

    if (isLoggedIn()) {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require '../views/vistaformulario.php';
        } else {

            require_once '../models/modeloplano.php';

            $valor = $_POST['credito'];
            $numPagamentos =  $_POST['numPrest'];
            $custo = 10;

            $planoPagamento = calculaPlano($valor, $numPagamentos);

            $numLinhas = count($planoPagamento);
            $numColunas = count($planoPagamento[0]);

            $currentTime = Carbon::now()->format('d-m-Y');

            require '../views/vistaplano.php';
        }
    } else {
        require_once '../views/login.php';
    }

    ?>

