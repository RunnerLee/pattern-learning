<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:11
 */
require __DIR__ . '/../vendor/autoload.php';

$object = new \Runner\Pattern\Observer\ConcreteObject();

$object->attach(new \Runner\Pattern\Observer\AlphaConcreteObserver());

$object->attach(new \Runner\Pattern\Observer\BetaConcreteObserver());

$object->fire();