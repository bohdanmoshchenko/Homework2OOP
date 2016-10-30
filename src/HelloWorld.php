<?php

namespace Vendor\Reporter;

class HelloWorld extends AbstractHelloWorld
{
    public function helloWorld()
    {
       return $this->getName() . ": Hello World! ";
    }
}
