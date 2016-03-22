<?php
/**
 * Created by PhpStorm.
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2016/3/22 0:05
 */

namespace Runnerlee\Pattern\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{

    public function testSingleton()
    {
        $obj = Singleton::getInstance();

        try {
            $demo = clone $obj;
        }catch(\Exception $e) {
            $this->assertEquals('fuck you', $e->getMessage());
        }
    }

}