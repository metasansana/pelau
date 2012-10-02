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

interface SQLConnection
{

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
     * Escapes the contents of a value according to the encoding of the connected database.
     * @param String $value
     */
    public function escape(String $value);

    /**
     * Terminates the current connection.
     */
    public function close();


}