<?php

function debug($value) 
{
    echo '<pre style="background-color:black; color:white;padding:15px;overflow:auto;">';
    print_r($value);
    echo '</pre>';
}

function dd($value) 
{
    debug($value);
    die("----------------------------------- Stop function -----------------------------------");
}

function calcul($a,$b)
{
    $c = $a +$b;
    return $c;
}

echo calcul(10,12);