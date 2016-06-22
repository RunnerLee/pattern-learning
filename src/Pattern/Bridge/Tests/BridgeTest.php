<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:55
 */
namespace Runner\Pattern\Bridge\Tests;

use Runner\Pattern\Bridge\RedColor;
use Runner\Pattern\Bridge\RefinedAbstraction;
use Runner\Pattern\Bridge\RoundMould;

class BridgeTest extends \PHPUnit_Framework_TestCase
{


    public function testBridge()
    {
        $refined = new RefinedAbstraction(new RoundMould(new RedColor()));

        $this->assertEquals('red', $refined->draw());
    }

}
