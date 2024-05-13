<?php


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
    }
}
