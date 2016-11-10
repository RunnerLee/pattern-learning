<?php
/**
 * @author: runnerlee
 * @email: runnerleer@gmail.com
 * @time: 2016-11-10 上午10:13
 */

namespace Runner\Pattern\Decorate;

abstract class DecorateProcess extends ProcessRequest
{

    protected $processRequest;

    public function __construct(ProcessRequest $processRequest)
    {
        $this->processRequest = $processRequest;
    }


    public function process(RequestHelper $requestHelper)
    {
        echo get_called_class() . "\n";

        $this->processRequest->process($requestHelper);
    }

}