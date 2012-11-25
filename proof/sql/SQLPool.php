<?php
namespace proof\sql;
/**
 * timestamp Oct 13, 2012 10:55:50 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for the storage of SQLSockets.
 *
 *
 */
interface SQLSocketPool
{

    /**
     * Returns a previoulsy stored socket.
     * @param int $index
     */
    public function retrieve($index);

    /**
     * Removes a previoulsy stored socket.
     * @param int $index
     */
    public function release($index);

    /**
     * Releases all stored sockets.
     */
    public function reset();

}