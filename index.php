<?php

use App\Router;

require 'vendor/autoload.php';

$router = new Router($_GET['url']);
$router->get('/', function($id){ echo "Bienvenue sur ma homepage !"; });
$router->get('/posts/:id', function($id){ echo "Voila l'article $id"; });
$router->run();