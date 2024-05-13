<?php

require_once '../models/auth.php';

logout();

var_dump($_SESSION);

require_once '../views/login.php';
