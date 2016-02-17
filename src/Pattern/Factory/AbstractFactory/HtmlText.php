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

class HtmlText extends BaseMedia
{
    public function render()
    {
        header('content-type: text/html; charset=utf-8;');
        return $this->content;
    }
}