<?php
/**
 * Created by PhpStorm.
 * User: runne
 * Date: 2016/1/14
 * Time: 18:08
 */

namespace Runnerlee\Pattern\Adapter\Plugs;

use Runnerlee\Pattern\Adapter\Socket\Socket;

abstract class Plugs
{

    /**
     * @var Socket
     */
    protected $socket;


    public function setSocket(Socket $socket)
    {
        $this->socket = $socket;

        return $this;
    }


    public function power()
    {
        return $this->socket->providePower();
    }

}