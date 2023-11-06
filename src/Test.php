<?php

class Test
{
    public $var1 = 'Variable 1';
    private $var2 = 'Variable 2 privé';
    protected $var3 = 'Variable 3 protected';
    const PI = 3.14;
    public $rayon;
    static $var4 = 'Variable 4 statique';

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
}
