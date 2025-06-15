<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('logout','SecurityController');
Routing::get('projects','ProjectsController');
Routing::get('search','ProjectsController');
Routing::get('addprojects','DefaultController');
Routing::get('register','SecurityController');
Routing::post('login','SecurityController');
Routing::post('addPlane','ProjectsController');

Routing::run($path);