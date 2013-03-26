<?php
namespace pelau\sql;
/**
 * timestamp Nov 10, 2012 6:28:28 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 *  Interface representing an SQL Statement
 *
 */

interface Statement
{

    /**
     * Preforms a query on the database.
     * @return \pelau\util\ArrayList
     */
    public function query();

    /**
     * Attempts an update on the database.
     * @return int
     */
    public function update();

}