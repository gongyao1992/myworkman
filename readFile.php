<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/Services/ReadOrderFile.php';

//use \Services\ReadOrderFile;

$str = (new \Gongyao\Testcomposer\helloworld())->say();

$str = "我是中国人";
echo (new \Gongyao\Testcomposer\Pinyin\helper())->getPinyin($str) . "\n";
echo (new \Gongyao\Testcomposer\Pinyin\helper())->getShortPinyin($str) . "\n";

var_dump($str);
die();

echo ReadOrderFile::test();