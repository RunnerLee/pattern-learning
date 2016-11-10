<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-10 上午10:12
 */

namespace Runner\Pattern\Decorate;

class MainProcess extends ProcessRequest
{

    function process(RequestHelper $requestHelper)
    {
        echo __METHOD__ . "\n";
    }
}