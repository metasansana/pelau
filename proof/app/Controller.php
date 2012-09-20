<?php
namespace proof\app;

/**
 * timestamp Sep 15, 2012 11:58:38 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Parent class of classes that take control of an application's workflow.
 *
 */
use proof\net\http\AbstractHttpListener;

abstract class Controller extends AbstractHttpListener
{

    /**
     * The Page object this controller will use for output.
     * @var proof\app\HtmlDocument $page A Page object.
     * @access protected
     */
    protected $page;

    /**
     * Reference to the running Application object.
     * @var proof\app\Application    An Application object.
     * @access protected
     */
    protected $app;

    /**
     * Constructs a new Controller object.
     * @param \proof\app\HtmlDocument $page
     */
    public function __construct(HtmlDocument $page, Application $app)
    {

        $this->page = $page;
        $this->app = $app;

    }

}