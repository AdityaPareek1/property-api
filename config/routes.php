<?php
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Core\Plugin;
use Cake\Routing\Route\DashedRoute;
Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));
    $routes->applyMiddleware('csrf');
    $routes->connect('/', ['controller' => 'Property', 'action' => 'index']);
   
    $routes->fallbacks(DashedRoute::class);
});
    Router::prefix('admin', function ($routes) {
        $routes->connect('/', ['controller' => 'dashboard', 'action' => 'index']);
        $routes->fallbacks('InflectedRoute');
    });

  
  

Plugin::routes();