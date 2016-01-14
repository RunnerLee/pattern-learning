<?php
/**
 * Created by PhpStorm.
 * User: runne
 * Date: 2016/1/14
 * Time: 18:11
 */

namespace Runnerlee\Pattern\Adapter;

use Runnerlee\Pattern\Adapter\Plugs\JpPlugs;
use Runnerlee\Pattern\Adapter\Socket\GbSocket;
use Runnerlee\Pattern\Adapter\Socket\Socket;

class Adapter extends JpPlugs implements Socket
{

    /**
     * @var GbSocket
     */
    protected $gbSocket;


    public function __construct()
    {
        // 自带插排效果
        $this->gbSocket = new GbSocket();
    }

    public function providePower()
    {
        // 拿到小日本的点
        $power = $this->socket->providePower();

        //以下为加工过程，省略
        /**
         * ... ...
         *
         */

        // 以大中华的电输出
        return $this->gbSocket->providePower();
    }
}