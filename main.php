<?php

require_once __DIR__ . '/vendor/autoload.php';

$helloWorld = new Vendor\Reporter\HelloWorld();
echo $helloWorld->helloWorld();
\Vendor\Reporter\StaticClassExample::showMessage();
