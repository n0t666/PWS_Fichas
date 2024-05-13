<?php

require_once 'models/auth.php';

class AuthController
{

    public function index()
    {
        require_once 'views/auth/index.php';
    }

    public function login()
    {
        $user = $_POST['username'];
        $pass = $_POST['pwd'];

        if (checkAuth($user, $pass)) {
            header('Location:index.php?c=plan&a=index');
        } else {
            require_once 'views/auth/index.php';
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location:index.php');
    }
}
