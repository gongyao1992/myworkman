<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Workerman\Worker;
use Workerman\Crontab\Crontab;

$worker = new Worker();

// 设置时区，避免运行结果与预期不一致
date_default_timezone_set('PRC');

$worker->onWorkerStart = function () {
    // 每分钟的第1秒执行.
    new Crontab('1 * * * * *', function(){
        echo \Services\ReadOrderFile::test() . "\n";
        echo date('Y-m-d H:i:s')."\n";
    });
    // 每天的7点50执行，注意这里省略了秒位.
    new Crontab('50 7 * * *', function(){
        echo date('Y-m-d H:i:s')."\n";
    });
};

Worker::runAll();