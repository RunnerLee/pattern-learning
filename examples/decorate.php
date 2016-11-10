<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-10 上午10:16
 */
require __DIR__ . '/../vendor/autoload.php';

$process = new \Runner\Pattern\Decorate\LogProcess(
    new \Runner\Pattern\Decorate\AuthenticationProcess(
        new \Runner\Pattern\Decorate\MainProcess()
    )
);

$process->process(new \Runner\Pattern\Decorate\RequestHelper());