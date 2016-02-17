<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/2/18
 * Time: 上午12:32
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace Runnerlee\Pattern\Factory\AbstractFactory;

/**
 * Class JsonText
 *
 * @package Runnerlee\Pattern\Factory\AbstractFactory
 */
class JsonText extends BaseMedia
{
    /**
     * @return mixed
     */
    public function render()
    {
//        header('content-type: application/json; charset=utf-8;');
        return $this->content;
    }

    /**
     * JsonText constructor.
     *
     * 或者不重写方法, 直接在Render方法中进行处理, 两者皆可.符合设计原则.
     * 如果在Render中设置,需要判断格式,异常处理等.
     *
     * @param array $content
     */
    public function __construct(array $content)
    {
        parent::__construct(json_encode($content));
    }
}