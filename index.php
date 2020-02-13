<?php

//  define server document root
define('DOCUMENT_ROOT', $_SERVER[DOCUMENT_ROOT]);

//  connect includes file
include(DOCUMENT_ROOT . '/' . 'includes.php');

spl_autoload_register('autoload');

$registry = new Registry();
$router = new Router($registry);

$registry->set('router', $router);
$router->setPath(SITE_PATH . DS . 'src' . DS . 'controllers');

$router->start();