<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 3</title>
</head>

<body>
    <?php
    $sports = array(
        '1022' => 'Atletismo',
        '100' => 'Badminton',
        '2658' => 'Basquetebol',
        '5000' => 'Futebol',
        '1026' => 'Natação',
    );
    foreach ($sports as $key => $value) {
        echo '';
    }
    ?>
    <select name="desportos" id="desportos">
        <?php
        foreach ($sports as $key => $value) {
            echo '<option value="' . $key .  '">' . $value . " ($key)" . '</option>';
        }
        ?>
    </select>



</body>

</html>