<?php
namespace proof\sql;
/**
 * timestamp Aug 4, 2012 11:15:10 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for listening on changes in the sql state.
 *
 *
 *
 */
interface SQLStateListener
{

    public function onChange(SQLState $state);


}