<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-6-21 下午4:16
 */
namespace Runner\Pattern\Bridge;

class RefinedAbstraction extends Abstraction
{

    public function __construct(MouldImplementor $mouldImplementor)
    {
        $this->mould = $mouldImplementor;
    }

}
