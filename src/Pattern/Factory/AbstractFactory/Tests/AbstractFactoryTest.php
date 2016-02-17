<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/2/18
 * Time: 上午12:37
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace Runnerlee\Pattern\Factory\AbstractFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $htmlFactory = new HtmlFactory();
        $text = $htmlFactory->createText('hello Dr\'Huang');
        $this->assertEquals('hello Dr\'Huang', $text->render());
        $jsonFactory = new JsonFactory();
        $text = $jsonFactory->createText(['name' => 'Dr\'Huang']);
        $this->assertEquals('{"name":"Dr\'Huang"}', $text->render());
    }
}
