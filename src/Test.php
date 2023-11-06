<?php

class Test
{
    public $var1 = 'Variable 1';
    private $var2 = 'Variable 2 privé';
    protected $var3 = 'Variable 3 protected';
    const PI = 3.14;

    public function displayVar($value)
    {
        //return 'test';
        // return $this->var2;
        return $this->var2 . ' ' . $value;
    }
}
