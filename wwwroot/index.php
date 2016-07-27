<?php

include("../vendor/autoload.php");
define('APPROOT', '../App/');

$error_reporting       = E_ALL ^ E_NOTICE;
//错误提示
ini_set('error_reporting', $error_reporting);
//or
//error_reporting(0);

//时区
ini_set('date.timezone','Asia/Shanghai');



echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';

D(
    [
        'leagueContainer'=>"<a href='leagueContainer.php' target=\"_blank\">leagueContainer.php</a>"
    ]
);




D(1);


//==============================================================
//test1
//$container = new League\Container\Container;
//// register the service as a prototype against an alias
//$container->add('service', 'SomeService');
//// now to retrieve this service we can just retrieve the alias
//// each time we `get` the service it will be a new instance
//$service1 = $container->get('service');
//$service2 = $container->get('service');
//var_dump($service1 instanceof SomeService); // true
//var_dump($service1 === $service2); // false
//exit;

//==============================================================
//test2
//$container = new League\Container\Container;
//// register the service as a prototype against the fully qualified classname
//$container->add('SomeService');
//// now to retrieve this service we can just retrieve the classname
//// each time we `get` the service it will be a new instance
//$service1 = $container->get('SomeService');
//$service2 = $container->get('SomeService');
//var_dump($service1 instanceof SomeService); // true
//var_dump($service1 === $service2); // false
//exit;

//==============================================================
//test2
//$container = new League\Container\Container;
//// register the service as shared against the fully qualified classname
//$container->share('SomeService');
//// you retrieve the service in exactly the same way, however, each time you
//// call `get` you will retrieve the same instance
//$service1 = $container->get('SomeService');
//$service2 = $container->get('SomeService');
//var_dump($service1 instanceof SomeService); // true
//var_dump($service1 === $service2); // true
//exit;


//==============================================================
//test2
//$container = new League\Container\Container;
//// register the service as an instance against an alias
//$container->add('service', new Acme\SomeService);
//// you retrieve the service in exactly the same way, however, each time you
//// call `get` you will retrieve the same instance
//$service1 = $container->get('Acme\SomeService');
//$service2 = $container->get('Acme\SomeService');
//var_dump($service1 instanceof Acme\SomeService); // true
//var_dump($service1 === $service2); // true




//==============================================================
//路由示例
//==============================================================

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

//定义容器
$container = new League\Container\Container;
$container->share('response', Zend\Diactoros\Response::class);
$container->share('request', function () {
    return Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
});
$container->share('emitter', Zend\Diactoros\Response\SapiEmitter::class);

D($container->get('request'));

//定义路由
$route = new League\Route\RouteCollection($container);
$route->map('GET', '/', function (ServerRequestInterface $request, ResponseInterface $response) {
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});


$response = $route->dispatch($container->get('request'), $container->get('response'));
//执行
$container->get('emitter')->emit($response);
exit;
//==============================================================
//路由示例 结束
//==============================================================















