<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:10
 */
namespace Runner\Pattern\Observer;

class AlphaConcreteObserver implements ObserverInterface
{

    public function update()
    {
        echo "alpha\n";
    }
}