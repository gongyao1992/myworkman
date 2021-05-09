<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/Services/ReadOrderFile.php';

//use \Services\ReadOrderFile;

$str = (new \Gongyao\Testcomposer\helloworld())->say();

var_dump($str);
die();

echo ReadOrderFile::test();