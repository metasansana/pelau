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
     * Creates an SQLClient for the database.
     * @return \pelau\sql\SQLClient
     */
    public function getClient();

    /**
     * Starts an SQL transaction with the database.
     * @return \pelau\sql\Transaction
     */
    public function getTransaction();

}