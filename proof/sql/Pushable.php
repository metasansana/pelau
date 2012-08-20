<?php
namespace proof\sql;
/**
 * timestamp Aug 4, 2012 1:00:08 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for pushing (updating) sql statements.
 *
 */
interface Pushable
{

    /**
     * @return int    The number of rows affected by the push.
     */
    public function push();

}