<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @blog: http://www.runnerlee.com/
 * @time: 2016/3/7 23:19
 */

namespace Runnerlee\Pattern\Builder;

class Director
{

    public function __construct(AbstractBuilder $abstractBuilder)
    {
        $abstractBuilder->buildPartOne();
        $abstractBuilder->buildPartTwo();
    }

}