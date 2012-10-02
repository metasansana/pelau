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
 * Interface for objects that handle changes in SQL state.
 *
 * A change in state usually implies some sort of error, this interface provides a way to be notified
 * about such errors and deal with them without having to repeat too much code.
 *
 *
 */
interface StateListener
{

    public function onChange(SQLState $state);


}