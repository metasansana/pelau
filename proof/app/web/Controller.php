<?php
namespace proof\web;
/**
 * timestamp Sep 8, 2012 2:50:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\web
 *
 *  Interface for classes that take control of the application upon request.
 *
 */
interface Controller
{

    /**
     * The main method of the controller.
     */
    public function main();

}