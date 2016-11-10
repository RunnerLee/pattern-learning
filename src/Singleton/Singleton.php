<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/22 0:01
 */

namespace Runnerlee\Pattern\Singleton;

class Singleton
{

    static protected $self = NULL;


    private function __construct() {}


    static public function getInstance()
    {
        if(is_null(self::$self)) {
            self::$self = new self();
        }

        return self::$self;
    }


    public function __clone()
    {
        throw new \Exception('fuck you');
    }


}