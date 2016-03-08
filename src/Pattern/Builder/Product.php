<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @blog: http://www.runnerlee.com/
 * @time: 2016/3/6 23:33
 */

namespace Runnerlee\Pattern\Builder;

class Product
{

    protected $parts;

    public function __construct()
    {
        $this->parts = [];
    }


    public function add($part) {
        return array_push($this->parts, $part);
    }

    public function get()
    {
        return $this->parts;
    }
}