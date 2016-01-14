<?php
/**
 * Created by PhpStorm.
 * User: runne
 * Date: 2016/1/14
 * Time: 16:49
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Interface:xxx:
 *
 * Chatou::xxx
 * xxxx:xxx
 *
 * $adapter = new Chatou(new xxxx);
 *
 * @adapter->xxx
 */

$adapter = new \Runnerlee\Pattern\Adapter\Adapter();

echo $adapter->setSocket(new \Runnerlee\Pattern\Adapter\Socket\JpSocket())->providePower();