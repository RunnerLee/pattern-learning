<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @blog: http://www.runnerlee.com/
 * @time: 2016/3/6 23:39
 */

namespace Runnerlee\Pattern\Builder;

abstract class AbstractBuilder
{

    abstract public function buildPartOne();


    abstract public function buildPartTwo();


    abstract public function getResult();

}