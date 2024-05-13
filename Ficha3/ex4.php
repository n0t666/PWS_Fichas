<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>

<body>
    <form method="post" action="">
        <label for="frutas[]">Escolha as suas frutas favoritas:</label><br>
        <input type="checkbox" name="frutas[]" value="morango">Morango<br>
        <input type="checkbox" name="frutas[]" value="laranja">Laranja<br>
        <input type="checkbox" name="frutas[]" value="banana">Banana<br>
        <input type="checkbox" name="frutas[]" value="framboesa">Framboesa<br>
        <button type="submit">Submeter</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST)) {
            $frutas = $_POST['frutas'];
            $listaFrutas = '';
            foreach ($frutas as $chave => $valor) {
                if (empty($listaFrutas)) {
                    $listaFrutas = $valor;
                } else {
                    $listaFrutas .= " , $valor";
                }
            }
            echo "  <p>As suas frutas favoritas são: $listaFrutas</p>";
        } else {
            echo "<p>Formulário vazio!</p>";
        }
    }
    ?>

</body>

</html>