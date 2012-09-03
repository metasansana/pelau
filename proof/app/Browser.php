<?php
namespace proof\app;

/**
 * timestamp Aug 22, 2012 5:30:09 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class for accessing common data associated with a user agent.
 *
 */
use proof\http\HttpRequest;

class Browser
{

    /**
     * The HttpRequest object associated with this runtime.
     * @var proof\http\HttpRequest
     * @access private
     */
    private $request;

    public function __construct(HttpRequest $request)
    {
        $this->request = $request;
    }
}