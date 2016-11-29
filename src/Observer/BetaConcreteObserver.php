<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:10
 */
namespace Runner\Pattern\Observer;

class BetaConcreteObserver implements ObserverInterface
{

    public function update()
    {
        echo "beta\n";
    }
}