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
use proof\php\String;

interface PDOConnection
{


    /**
     *  Attempts to connect to a database via a PDO object.
     * @param \proof\sql\ConnectionErrorHandler $e    If set, onFailure() of this object is called on connection failure.
     * @return \PDO|NULL A PDO object or null on failure
     */
    public function connect(ConnectionErrorHandler $e = NULL);

    /**
     * Attempts to generate a new PreparedStatement class.
     * @param proof\php\String $sql
     */
    public function prepare(String $sql);

    /**
     * Attempts to generate a new Statement class.
     * @param proof\php\String $sql
     */
    public function create(String $sql);

    /**
     * Tests whether the connector is connected or not.
     */
    public function isConnected();

    /**
     * Terminates any existing connection.
     */
    public function disconnect();


}