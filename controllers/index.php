<?php

require_once '../model/model.php';

function index()
{
    require_once '../view/homepage.php';
}

function connection()
{
    $connectionSuccess = connectUser();
    $url = $connectionSuccess ? 'http://localhost:8000/public/index?c=visiteur&f=welcome' : 'http://localhost:8000/public/index?c=index&f=index';
    header("Location: " . $url);
}

function logout()
{
    disconnectUser();
    header("Location: http://localhost:8000/?c=index&f=index");
}