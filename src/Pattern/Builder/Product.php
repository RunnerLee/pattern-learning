<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/21 0:48
 */

namespace Runnerlee\Pattern\Builder;

class Product
{

    protected $config = [];


    public function __construct(array $config = [])
    {
        $this->config = $config;
    }


    public function push($config)
    {
        return array_push($this->config, $config);
    }


    public function pull()
    {
        return $this->config;
    }

}