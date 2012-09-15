<?php
namespace proof\helpers;

/**
 * timestamp Sep 3, 2012 4:00:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\helpers
 *
 *  <b>Unit testing class, NOT part of the official package!</b>
 *
 */
use proof\sql\SQLStateHandler;

class TestSQLStateHandler implements SQLStateHandler
{


    public function onStateChange(\proof\sql\SQLState $state)
    {

        printf("\n");
        printf(">>>>>>>>>>>>>>>>>>>>>>>>>>>\n");
        printf($state->getMessage());
        printf("<<<<<<<<<<<<<<<<<<<<<<<<<<<\n");

    }
}