<?php

require_once '../model/model.php';

function index()
{
    require_once '../view/homepage_login.php';
}

function connection()
{
    $connection_success = connectUser();
    $url = $connection_success ? 'http://localhost:8000/?c=visitor&f=consultationExpenseSheet' : 'http://localhost:8000/?c=index&f=index';
    header("Location: " . $url);
}

function logout()
{
    disconnectUser();
    header("Location: http://localhost:8000/?c=index&f=index");
}