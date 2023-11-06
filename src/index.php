<?php
require 'Test.php';
require 'Model.php';

// $obj = new Test();

//echo $obj->var1;
//echo $obj->var2;
// echo $obj->var3;

// echo $obj->displayVar('');
// echo $obj->displayVar('blabla');

// echo $obj::PI;
// echo $obj->calculAire();

// $obj->rayon = 12;
// echo $obj->calculAire() . ' cm²';

// echo Test::$var4;
// echo Test::staticFonc();


//$objHerite = new TestHerite();

// echo $objHerite->getVar();

// $user = new Model();
// var_dump($user);

$obj3 = new AbstractClassHerite();
$obj3->appelleUneMethode();