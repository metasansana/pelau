<?php
namespace proof\sql;
/**
 * timestamp Aug 26, 2012 11:00:16 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Inteface for pushing to and pulling data from an sql endpoint.
 *
 */
interface SQLCommand
{

    /**
     * Pulls data from the database (query).
     * @param \proof\sql\PullHandler $h    The object that will recieve the data row by row.
     *
     *
     */
    public function pull(PullHandler $h);

    /**
     * Pushes  a command to the database.
     * @return int The number of rows affected by the push.
     */
    public function push();


}