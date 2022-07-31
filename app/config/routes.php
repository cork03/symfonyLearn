<?php
// config/routes.php
use App\Controller\LuckyController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('lucky_number', '/lucky/number')
        ->controller([LuckyController::class, 'number'])
    ;
    $routes->add('lucky_number', '/lucky/json')
        ->controller([LuckyController::class, 'testJson'])
    ;
};
