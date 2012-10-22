<?php
namespace proof\app;
/**
 * timestamp Oct 20, 2012 11:24:04 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Parent class for main controllers of a web application.
 *
 */
abstract class Applet
{

    /**
     * The Application class that this Applet runs in.
     * @var proof\app\Application $main
     * @access private
     */
    private $main;

    public function __construct(Application $main)
    {

        $this->main = $main;

    }

}