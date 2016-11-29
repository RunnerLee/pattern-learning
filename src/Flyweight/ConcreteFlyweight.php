<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-28 下午3:00
 */
namespace Runner\Pattern\Flyweight;

class ConcreteFlyweight extends AbstractFlyweight
{

    public function operate($name)
    {
        return "hey girl, I'm strong";
    }
}