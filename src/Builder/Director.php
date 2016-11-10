<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/21 0:54
 */

namespace Runnerlee\Pattern\Builder;

class Director
{

    public function __construct(AbstractBuilder $builder)
    {
        $builder->build();
    }

}