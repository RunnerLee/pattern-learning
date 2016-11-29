<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-28 上午10:25
 */
namespace Runner\Composite;

interface Component
{

    /**
     * @return Component
     */
    public function getComponent();


    public function operate();

}