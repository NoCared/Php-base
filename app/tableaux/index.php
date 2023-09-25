<?php

echo "tableaux";


$tableau1= [];
//$tableau1= array();

$tableau2 = [true, 4, 5.8, [5, 'client', ['user',8.9,8]]];
$tableau2 = [
    true, 
    4, 
    5.8, 
    [
        5, 
        'client', 
        [
            'user',
            8.9,
            8
        ]
    ]
];

var_dump($tableau2);