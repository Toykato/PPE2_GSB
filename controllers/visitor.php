<?php

function creationExepenseSheet()
{
    require_once '../view/creation_expense_sheet.php';
}

function consultationExpenseSheet()
{
    require_once '../view/consultation_expense_sheet.php';
}


function getMonth()
{
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo ucwords((strftime("%B %Y"))); 
}

function getCompleteDate()
{
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo ucwords((strftime("%A %d %B %Y")));
}

