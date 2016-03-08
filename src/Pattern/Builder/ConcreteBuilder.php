<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @blog: http://www.runnerlee.com/
 * @time: 2016/3/7 23:17
 */

namespace Runnerlee\Pattern\Builder;

class ConcreteBuilder extends AbstractBuilder
{

    protected $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartOne()
    {
        $this->product->add('one');
    }

    public function buildPartTwo()
    {
        $this->product->add('two');
    }

    public function getResult()
    {
        return $this->product;
    }
}