<?php
namespace proof\sql;

/**
 * timestamp Sep 3, 2012 3:48:11 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Abstract class for the SQLCommand interface.
 *
 */
use proof\php\Object;

abstract class AbstractSQLCommand extends Object implements SQLCommand
{


    protected  function changeState(array $info, SQLStateHandler $shandler = NULL)
    {
        if($shandler)
            $shandler->onStateChange(new SQLState($info));
    }



}