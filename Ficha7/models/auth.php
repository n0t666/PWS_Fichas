<?php

session_start();

function checkAuth($username, $password)
{
    if ($username === 'Leandro' && $password === '123') {
        $_SESSION['isLogged'] = true;
        return true;
    } else {
        $_SESSION['isLogged'] = false;
        return false;
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === true) {
        return true;
    }
    return false;
}


function logout()
{
    session_destroy();
}
