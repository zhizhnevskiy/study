<?php

use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
// use Slim\Factory\ServerRequestCreatorFactory;

// AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
// ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

require __DIR__ . '/../vendor/autoload.php';

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('<a href="/hello/world">Try /hello/world</a>');
    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/about', function ($request, $response) {
    $phpView = new PhpRenderer('../templates');
    return $phpView->render($response, 'about.phtml');
});

$app->run();
