<?php
//==============================================================
//test1
$container = new League\Container\Container;
// register the service as a prototype against an alias
$container->add('service', 'App\SomeService');
// now to retrieve this service we can just retrieve the alias
// each time we `get` the service it will be a new instance
$service1 = $container->get('service');
$service2 = $container->get('service');
var_dump($service1 instanceof \App\SomeService); // true
var_dump($service1 === $service2); // false



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
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
