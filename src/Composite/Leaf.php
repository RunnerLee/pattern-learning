<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-28 上午10:26
 */

namespace Runner\Composite;

class Leaf implements Component
{

    /**
     * @return Component
     */
    public function getComponent()
    {
        return null;
    }

    public function operate()
    {
        return 13;
    }
}