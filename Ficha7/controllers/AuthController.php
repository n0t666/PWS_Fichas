<?php


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
    }
}
