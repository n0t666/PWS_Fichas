<?php

require_once 'models/auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller
{

    public function index()
    {
        $this->renderView('auth', 'index');
    }

    public function login()
    {
        $user = $_POST['username'];
        $pass = $_POST['pwd'];

        if (checkAuth($user, $pass)) {
            header('Location:index.php?c=plan&a=index');
        } else {
            $this->renderView('auth', 'index');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location:index.php');
    }
}
