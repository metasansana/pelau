<?php
namespace proof\app;
/**
 * timestamp Sep 16, 2012 10:04:47 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class representing a PHP application.
 *
 */
interface Application
{

    /**
     * Starts the application.
     */
    public function run();

    /**
     * Stops the application and optional exists with a status code.
     * @param int $code
     */
    public function shutdown($code=0);

    /**
     * Returns the configuration for the application.
     */
    public function getConfiguration();

}