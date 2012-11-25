<?php

namespace proof\sql;


/**
 * timestamp Oct 4, 2012 5:33:38 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for using SQL transaction (Auto commit off).
 *
 */
interface SQLTransaction extends SQLSocket
{

    /**
     * Commit already executed commands to the database.
     * @returns boolean
     */
    public function commit();

    /**
     * Cancels the effect of previous commands and  "rolls back" the server.
     */
    public function cancel();

}