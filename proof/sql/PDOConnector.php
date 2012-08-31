<?php
namespace proof\sql;

/**
 * timestamp Aug 30, 2012 5:03:19 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for connecting to a database via a PDO object.
 *
 *  This interface declares a single method that is expected to return a PDO object on successful connection or nothing
 *  on failure.
 *
 */
interface PDOConnector
{


    /**
     *  Attempts to connect to a database via a PDO object.
     * @param \proof\sql\ConnectorErrorHandler $e    If set, onFailure() of this object is called on connection failure.
     * @return \PDO|NULL A PDO object or null on failure
     */
    public function connect(ConnectorErrorHandler $e = NULL);


}