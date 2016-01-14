<?php
/**
 * Created by PhpStorm.
 * User: runne
 * Date: 2016/1/14
 * Time: 18:11
 */

namespace Runnerlee\Pattern\Adapter\Socket;


class JpSocket implements Socket
{

    public function providePower()
    {
        return 'japan power is coming';
    }
}