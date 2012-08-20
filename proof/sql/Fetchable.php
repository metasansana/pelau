<?php
namespace proof\sql;
/**
 * timestamp Aug 4, 2012 1:00:16 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for fetching sql statements.
 *
 */
interface Fetchable
{

    /**
     * @return proof\util\ArrayList An ArrayList of Maps each representing a row in the database.
     */
    public function fetch(FetchHandler $h);

}