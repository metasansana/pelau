<?php
namespace pelau\sql;
/**
 * timestamp Nov 10, 2012 4:31:06 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 * Interface for interacting with SQL databases.
 *
 */


interface SQLConnection
{

    /**
     *  Creates a Statement class from an String.
     * @param string $sql    SQL statement in string form.
     * @return pelau\sql\Statement    The Statement.
     */
    public function create($sql);

    /**
     * Creates a PreparedStatement class from an String.
     * @param string $sql    SQL statement in string form.
     * @return pelau\sql\PreparedStatement    The PreparedStatement.
     */
    public function prepare($sql);

    /**
     * Generates a new transaction with the server.
     * @return pelau\sql\Transaction    A Transaction class representing an open transaction with the server.
     */
    public function getTransaction();



}