<?php

function debug($value) 
{
    echo '<pre style="background-color:black; color:white;padding:15px;overflow:auto;">';
    var_dump($value);
    echo '</pre>';
}

function dd($value) 
{
    debug($value);
    die("----------------------------------- Stop function -----------------------------------");
}