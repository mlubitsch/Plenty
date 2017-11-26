<?php
 
namespace Plentyapp\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class TestRoute extends RouteServiceProvider{

    public function map(Router $router){
        $router->get('hello','Plentyapp\Controllers\ContentController@sayHello');
    }
}