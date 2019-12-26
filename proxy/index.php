<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function timeLoadImage($path)
{
  $start = time();

  echo ProxyImageService::load($path) . " loaded" . PHP_EOL;

  echo sprintf(
    "Time taken : %s seconds" . PHP_EOL,
    (time() - $start)
  );

  echo PHP_EOL;
}

timeLoadImage('random/path/here');
timeLoadImage('random/path/there');
timeLoadImage('random/path/here');
