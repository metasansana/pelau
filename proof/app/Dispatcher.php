<?php

namespace proof\app;

/**
 * timestamp Aug 22, 2012 5:09:59 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * Class for dispatching http method events to controllers.
 *
 *
 */
use proof\http\HttpRequest;
use proof\util\ArrayList;

class Dispatcher extends \proof\php\Object
{

    /**
     * An HttpRequest constructed at run time.
     * @var proof\http\request
     * @access private
     */
    private $request;

    /**
     * The list of controllers.
     * @var proof\util\ArrayList
     * @access private
     */
    private $list;

    /**
     * Constructs a new Dispatcher object.
     * @param \proof\http\HttpRequest $request    The HttpRequest object associated with this run time.
     */
    public function __constuct(HttpRequest $request)
    {
        $this->request = $request;
        $this->list = new ArrayList;
    }

    private function dipatchGet()
    {

    }

    private function dispatchPost()
    {

    }

    /**
     * Adds a controller to the dispatachers internal list.
     * @param \proof\app\Controller $ctrl    The Controller to be added.
     * @return \proof\app\Dispatcher
     */
    public function addController(Controller $ctrl)
    {

        $this->list->add($ctrl);

        return $this;

    }

    /**
     * @todo implement checkRequest
     */
    public function checkRequest()
    {
    }

}