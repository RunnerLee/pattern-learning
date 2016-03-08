<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @blog: http://www.runnerlee.com/
 * @time: 2016/3/7 23:25
 */

namespace Runnerlee\Pattern\Builder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{

    public function testBuilder()
    {
        $builder = new ConcreteBuilder();
        $director = new Director($builder);

        $produect = $builder->getResult();

        $this->assertEquals(['one', 'two'], $produect->get());
    }

}