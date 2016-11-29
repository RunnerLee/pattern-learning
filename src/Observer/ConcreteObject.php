<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-29 上午11:06
 */
namespace Runner\Pattern\Observer;

class ConcreteObject implements ObjectInterface
{

    /**
     * @var array
     */
    protected $observers = [];


    /**
     * @param ObserverInterface $observer
     * @return $this
     */
    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;

        return $this;
    }


    /**
     * @param ObserverInterface $observer
     * @return $this
     */
    public function detach(ObserverInterface $observer)
    {
        if (in_array($observer, $this->observers)) {
            unset($this->observers[array_search($observer, $this->observers)]);
        }

        return $this;
    }


    public function fire()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}