<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-28 下午3:02
 */
namespace Runner\Pattern\Flyweight;

class UnsharedConcreteFlyweight extends AbstractFlyweight
{

    public function operate($name)
    {
        return " not shared";
    }
}