<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-10 上午10:11
 */

namespace Runner\Pattern\Decorate;

abstract class ProcessRequest
{
    abstract function process(RequestHelper $requestHelper);
}