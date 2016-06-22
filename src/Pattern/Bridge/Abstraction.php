<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:12
 */
namespace Runner\Pattern\Bridge;

abstract class Abstraction
{

    /**
     * @var MouldImplementor
     */
    protected $mould;


    public function draw()
    {
        return $this->mould->build();
    }

}
