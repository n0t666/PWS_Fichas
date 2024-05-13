<?php

require_once '../models/auth.php';

echo session_id();


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once '../views/login.php';
} else {
    $user = $_POST['username'];
    $pass = $_POST['pwd'];
    if (checkAuth($user, $pass)) {
        header(header: 'Location: controlador.php');
    } else {
        require_once '../views/login.php';
    }
}
