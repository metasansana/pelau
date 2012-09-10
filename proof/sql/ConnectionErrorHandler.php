<?php
namespace proof\sql;

/**
 * timestamp Aug 30, 2012 5:20:24 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for classes that respond to PDO connection errors.
 *
 */
interface ConnectionErrorHandler
{
    /**
     * Method called by connectors when they cannot generate a new PDO object.
     * @param \PDOException $ex
     */
    public function onFailure(\PDOException $ex);

}