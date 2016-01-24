<?php

use ShippingSteam\LandingPadUI\Controllers\HomeController;
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
        'cache' => false,
        'debug' => true
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

$container[HomeController::class] = function ($container) {
    return new HomeController($container['view']);
};



$app = new App($container);

$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
    $controller = $this->get(HomeController::class);
    return $controller->index($request, $response, $args);
});

$app->run();