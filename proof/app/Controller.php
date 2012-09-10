<?php
namespace proof\app;
/**
 * timestamp Sep 8, 2012 2:50:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\web
 *
 *  Interface for classes that take control of the web application upon client request.
 *
 */
use proof\util\EventHandler;

interface Controller  extends EventHandler
{

    /**
     * The main method of the controller.
     */
    public function main();

}