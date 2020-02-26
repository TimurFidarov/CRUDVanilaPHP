<?php

//Alters directory separator if we are using windows
(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? define('DS', '/') : define('DS', DIRECTORY_SEPARATOR);
//Defining the root for the project. You have to change that after deployemnt to the actual site
define('ROOT', dirname(__FILE__));


session_start();


$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];


