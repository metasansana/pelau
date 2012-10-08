<?php
namespace proof\app;
/**
 * timestamp Sep 24, 2012 12:47:12 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for creating SQLSockets.
 *
 */


interface SQLSocketFactory
{


    /**
     * Creates and returns an connection to an SQL database.
     * @return proof\sql\SQLSocket    The SQLSocket.
     */
    public function getSQLSocket();



}