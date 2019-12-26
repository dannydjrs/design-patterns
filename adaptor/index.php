<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$xml = new XMLAdaptor(new XML());
$json = new JSON();

echo serialize($xml) . PHP_EOL;
echo serialize($json) . PHP_EOL;
