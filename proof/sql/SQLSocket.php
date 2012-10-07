<?php
namespace proof\sql;

/**
 * timestamp Oct 3, 2012 4:14:17 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for representing endpoints to SQL databases.
 *
 */
use proof\php\String;

interface PDOSocket
{

    /**
     *  Creates a Statement class from an String.
     * @param String $sql    SQL statement in string form.
     * @return proof\sql\Statement    The Statement.
     */
    public function create(String $sql);

    /**
     * Creates a PreparedStatement class from an String.
     * @param String $sql    SQL statement in string form.
     * @return proof\sql\PreparedStatement    The PreparedStatement.
     */
    public function prepare(String $sql);

    /**
     * Close this SQLSocket.
     */
    public function close();

}