<?php
session_start();


require_once 'Routing.php';

$path = trim(explode('?', $_SERVER['REQUEST_URI'])[0], '\/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('signup', 'SecurityController');
Routing::get('doctors', 'DefaultController');
Routing::get('specialist', 'SpecialistController');
Routing::get('pacjent', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('moreInfo', 'SecurityController');
Routing::post('search', 'SpecialistController');
Routing::post('logout', 'SecurityController');


Routing::run($path);