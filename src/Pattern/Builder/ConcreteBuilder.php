<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/21 0:46
 */

namespace Runnerlee\Pattern\Builder;

class ConcreteBuilder extends AbstractBuilder
{

    protected $product;


    public function __construct()
    {
        $this->product = new Product();
    }

    public function build()
    {
        $this->product->push('good');
    }

    public function get()
    {
        return $this->product;
    }
}