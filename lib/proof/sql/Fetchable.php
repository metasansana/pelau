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
     *
     * @param \proof\sql\FetchHandler $h    An object capable of receiving rows fetched from the database.
     * @param \proof\sql\SQLStateHandler $l    If given, this object will be notifed on sql state changes.
     *
     */
    public function fetch(FetchHandler $h, SQLStateHandler $l = NULL);

}