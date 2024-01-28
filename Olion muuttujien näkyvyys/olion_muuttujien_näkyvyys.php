<?php

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

    // for printing out protected property
    function setProtected($protected) {
        $this->protected = $protected;
    }
    function getProtected() {
        return $this->protected;
    }
    // for printing out private property
    function setPrivate($private) {
        $this->protected = $private;
    }
    function getPrivate() {
        return $this->private;
    }
}

$newMyClass = new MyClass();
echo $newMyClass->public . "\n";
echo $newMyClass->getProtected() . "\n";
echo $newMyClass->getPrivate() . "\n";
echo $newMyClass->printHello() . "\n";

