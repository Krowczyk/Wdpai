<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('projects','DefaultController');
Routing::get('search','DefaultController');
Routing::get('addprojects','DefaultController');
Routing::post('login','SecurityController');
Routing::post('addPlane','ProjectsController');

Routing::run($path);