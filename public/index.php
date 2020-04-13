<?php

session_start();
echo '<pre>'; var_dump($_SESSION); echo '</pre>';

$get=$_GET;
//var_dump($get);

$router = [];
$router['controller'] = 'index';
$router['function'] = 'index';
//var_dump($router['controller']);
//var_dump($router['function']);

if (!empty($get)) {
	$router['controller'] = $_GET['c'];
	$router['function'] = $_GET['f'];
}

require_once "../controllers/" . $router['controller'] . ".php";

$router['function']();