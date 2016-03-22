<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/18 0:14
 */

namespace Runnerlee\Pattern\Builder;

abstract class AbstractBuilder
{

    abstract public function build();

    abstract public function get();
}