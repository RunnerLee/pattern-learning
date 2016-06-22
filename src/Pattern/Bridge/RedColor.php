<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:29
 */
namespace Runner\Pattern\Bridge;

class RedColor implements ColorInterface
{

    public function getColor()
    {
        return 'red';
    }
}
