<?php
namespace pelau\util;
/**
 * timestamp Oct 13, 2012 9:34:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package benson\main
 *
 * Interface for implementing the command pattern.
 *
 */
interface Command
{


    /**
     * When this method is called, the Command executes its workload.
     * @return boolean | NULL
     */
    public function execute();

}