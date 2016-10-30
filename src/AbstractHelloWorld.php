<?php

namespace Vendor\Reporter;

abstract class AbstractHelloWorld implements HelloWorldInterface
{
    private $name = 'Bohdan';

    abstract public function helloWorld();

    public function getName()
    {
        return $this->name;
    }
}
