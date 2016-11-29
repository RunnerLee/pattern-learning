<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:36
 */
namespace Runner\Pattern\Observer;

class Dispatcher
{

    protected $listeners = [];


    public function listen($object, $event)
    {
        if (is_string($object) && class_exists($object)) {
            $object = new $object;
        }

        ! is_object($event) && class_exists($event) && ($event = new $event);

        if (! $object instanceof ObjectInterface || ! $event instanceof ObserverInterface) {
            throw new \Exception('fuck you');
        }

        ($this->listeners[get_class($object)] = $object)->attach($event);

        return $this;
    }


    public function fire($event)
    {
        if (!isset($this->listeners[$event])) {
            return false;
        }

        $this->listeners[$event]->fire();
    }

}