<?php

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('signup', 'SecurityController');
Routing::get('doctors', 'DefaultController');
Routing::get('specialist', 'DefaultController');
Routing::get('pacjent', 'DefaultController');
Routing::post('login', 'SecurityController');


Routing::run($path);