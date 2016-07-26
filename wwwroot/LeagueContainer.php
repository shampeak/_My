<?php
//name LeagueContainer

$name = 'LeagueContainer/';

include("../vendor/autoload.php");
define('APPROOT', '../App/');

$error_reporting       = E_ALL ^ E_NOTICE;
ini_set('error_reporting', $error_reporting);
//ini_set('date.timezone','Asia/Shanghai');
//header("Content-Type: text/html; charset=utf-8");
//==============================================================
//必要参数
$channel = $_GET['channel']?:'Default';
$channelList = [
    'Default',
    'two',
    'three',
    'four',
];

//channel like LeagueContainer/index
$rootpath = APPROOT.$name;

//获取执行结果反馈界面
$tplfile    = $rootpath.ucfirst($channel).'.php';        //加载示例
if(!is_file($tplfile)){
    die("Miss file : $tplfile");
}
ob_start();
@include $tplfile;
$tpl = ob_get_contents();
ob_end_clean();

//获取说明文档

$mdfile     = $rootpath.'Markdown/'.ucfirst($channel).'.md';   //加载markdown文档说明
if(!is_file($mdfile)){
    die("Miss file : $mdfile");
}
ob_start();
@include $mdfile;
$md = ob_get_contents();
ob_end_clean();

$parsedown = new \Parsedown();
$md = $parsedown->text($md);

//显示模板
include APPROOT.'Views/Default.php';

exit;













switch($channel){
    default:
        T('LeagueContainer/index');
        break;
    case 'two':
            //==============================================================
            //test2
            $container = new League\Container\Container;
            // register the service as a prototype against the fully qualified classname
            $container->add('\App\SomeService');
            // now to retrieve this service we can just retrieve the classname
            // each time we `get` the service it will be a new instance
            $service1 = $container->get('\App\SomeService');
            $service2 = $container->get('\App\SomeService');
            var_dump($service1 instanceof \App\SomeService); // true
            var_dump($service1 === $service2); // false
            echo 'two';
            exit;
        break;
    case 'three':
            //==============================================================
            //test2
            $container = new League\Container\Container;
            // register the service as shared against the fully qualified classname
            $container->share('\App\SomeService');
            // you retrieve the service in exactly the same way, however, each time you
            // call `get` you will retrieve the same instance
            $service1 = $container->get('\App\SomeService');
            $service2 = $container->get('\App\SomeService');
            var_dump($service1 instanceof \App\SomeService); // true
            var_dump($service1 === $service2); // true
            echo 'three';
            exit;

        break;
    case 'four':
        break;
}

echo "上海";



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

