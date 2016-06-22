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

$refined = new \Runner\Pattern\Bridge\RefinedAbstraction(new \Runner\Pattern\Bridge\RoundMould(new \Runner\Pattern\Bridge\RedColor()));

echo $refined->draw();