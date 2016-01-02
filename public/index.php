<?php

use ShippingSteam\Controllers\HomeController;
use Slim\App;
use Slim\Container;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig;

require('../vendor/autoload.php');

$container = new Container;

// Register component on container
$container['view'] = function ($container) {
    $view = new Twig(__DIR__ . '/../src/Views', [
        'cache' => false
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};



$app = new App($container);

$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
    $controller = new HomeController($this->view);
    return $controller->index($request, $response, $args);
});

$app->run();

die();