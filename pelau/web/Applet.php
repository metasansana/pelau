<?php
namespace pelau\app\web;
/**
 * timestamp Oct 20, 2012 11:24:04 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\app
 *
 *  Parent class for main controllers of a web application.
 *
 */
use pelau\net\http\AbstractHttpListener;

abstract class Applet extends AbstractHttpListener
{

    /**
     * The Application class that this Applet runs in.
     * @var pelau\app\Application $main
     * @access private
     */
    protected $app;

    public function __construct(Application $main)
    {

        $this->app = $main;

    }

}