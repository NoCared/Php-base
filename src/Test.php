<?php

class Test
{
    public $var1 = 'Variable 1';
    private $var2 = 'Variable 2 privé';
    protected $var3 = 'Variable 3 protected';
    const PI = 3.14;
    public $rayon;
    static $var4 = 'Variable 4 statique';

    public function __construct()
    {
        echo 'I am a constructor of class : ' . __CLASS__ . '<br>';
    }

    public function displayVar($value)
    {
        //return 'test';
        // return $this->var2;
        return $this->var2 . ' ' . $value;
    }

    public function calculAire()
    {
        return self::PI * $this->rayon * $this->rayon;
    }

    static function staticFonc()
    {
        return 'Methode statique : ' . self::$var4;
    }

    public function __destruct()
    {
        echo 'I am a destructor of class : ' . __CLASS__ . '<br>';
    }
}

class TestHerite extends Test
{
    public function __construct()
    {
        parent::__construct();
        echo 'I am a constructor of class : ' . __CLASS__ . '<br>';
    }

    public function getVar()
    {
        return $this->var3 . '<br>';
    }
}

abstract class AbstractClass
{
    abstract protected function uneMethode();

    public function appelleUneMethode()
    {
        $this->uneMethode();
    }
}

class AbstractClassHerite extends AbstractClass
{
    protected function uneMethode()
    {
        echo 'une methode appelée !';
    }
}