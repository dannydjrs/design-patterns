<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function printPersonality($personality)
{
	foreach($personality as $trait => $value) {
		echo $trait . ' : ' . $value . PHP_EOL;
	}
}

$builder = new PersonalityBuilder();

$builder->makeAngry();
$builder->makeStable();
$builder->makeSociable();
$builder->makeDeliberate();
$builder->makeGregarious();
$builder->makeCurious();
$builder->makeCreative();
$builder->makeFriendly();
$builder->makeCooperative();
$builder->makeOrganised();

printPersonality($builder->getResult());

