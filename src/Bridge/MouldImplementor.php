<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:14
 */
namespace Runner\Pattern\Bridge;

abstract class MouldImplementor
{

    protected $color;

    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }


    public function build()
    {
        return $this->draw();
    }


    abstract public function draw();
}
