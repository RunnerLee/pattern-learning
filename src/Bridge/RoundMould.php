<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:17
 */
namespace Runner\Pattern\Bridge;

class RoundMould extends MouldImplementor
{

    public function draw()
    {
        return $this->color->getColor();
    }
}
