<?php
/**
 * Created by PhpStorm.
 * User: runne
 * Date: 2016/1/14
 * Time: 18:10
 */

namespace Runnerlee\Pattern\Adapter\Socket;


class GbSocket implements Socket
{

    public function providePower()
    {
        return 'china power is coming';
    }
}