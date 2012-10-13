<?php
namespace proof\app\web;
/**
 * timestamp Sep 24, 2012 1:57:21 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web;
 *
 *  Parent class of main use case classes in a web applicaiton.
 *  <p>WebListener class <i>listen</i> for HttpEvents and respond via the associated on*() handlers.
 *
 */
use proof\net\http\AbstractHttpListener;
use proof\app\Application;

class WebController extends AbstractHttpListener
{


    /**
     * The WebApplication associated with this class.
     * @var proof\app\Application
     * @access protected
     */
    protected $app;

    /**
     * The HtmlDocument associated with this class.
     * @var proof\app\web\HtmlDocument
     * @access protected
     */
    protected $doc;


    /**
     * Constructs a new WebListener
     * @param \proof\app\web\Application $app  The Application associated with this class.
     * @param \proof\app\web\HtmlDocument $doc    The HtmlDocument associated with this class.
     */
    public function __construct(Application $app, HtmlDocument $doc)
    {

        $this->app = $app;
        $this->doc = $doc;

    }

}