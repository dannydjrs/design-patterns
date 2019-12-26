<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function globalStore($index, $value)
{
        Storage::getInstance()->set($index, $value);
}

function globalRetrieve($index)
{
        return Storage::getInstance()->get($index);
}

// Gather the instance in two different variables
$firstInstance = Storage::getInstance();
$secondInstance = Storage::getInstance();

// Check if they are the same instance
if (spl_object_hash($firstInstance) === spl_object_hash($secondInstance)) {
	echo "Sucessfully implemented a singleton" . PHP_EOL;

} 

// Test storage ability
globalStore('one', 1);
globalStore('two', 2);
 
echo globalRetrieve('one') . PHP_EOL;
echo globalRetrieve('two') . PHP_EOL;

