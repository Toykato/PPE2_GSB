<?php
$get=$_GET;

$router = [];
$router['controller'] = 'index';
$router['function'] = 'index';


if (!empty($get)) {
	$router['controller'] = $_GET['c'];
	$router['function'] = $_GET['f'];
}


require_once "../controllers/".$router['controller'].".php";

$router['function']();
