<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/21 0:56
 */

namespace Runnerlee\Pattern\Builder;


class BuilderTest extends \PHPUnit_Framework_TestCase
{


    public function testBuilder()
    {
        $builder = new ConcreteBuilder();
        $director = new Director($builder);

        $product = $builder->get();

        $this->assertEquals('good', $product->pull()[0]);
    }

}
