<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-28 上午10:28
 */
namespace Runner\Composite;

class Composite implements Component
{

    /**
     * @var array
     */
    protected $components = [];


    public function add(Component $component)
    {
        $this->components[] = $component;

        return $this;
    }


    public function getComponents()
    {
        return $this->components;
    }


    /**
     * @return Component
     */
    public function getComponent()
    {
        return $this;
    }


    public function operate()
    {
        $return = 0;

        foreach ($this->components as $component) {
            $return += $component->operate();
        }

        return $return;
    }
}