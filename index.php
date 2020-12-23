<?php

require_once 'Routing.php';

$path = trim(explode('?', $_SERVER['REQUEST_URI'])[0], '\/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('signup', 'SecurityController');
Routing::get('doctors', 'DefaultController');
Routing::get('specialist', 'DefaultController');
Routing::get('pacjent', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('moreInfo', 'SecurityController');


Routing::run($path);