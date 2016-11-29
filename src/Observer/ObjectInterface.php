<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:04
 */
namespace Runner\Pattern\Observer;

interface ObjectInterface
{

    public function attach(ObserverInterface $observer);


    public function detach(ObserverInterface $observer);


    public function fire();



}