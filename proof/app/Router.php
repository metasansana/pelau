<?php
namespace proof\app;
/**
 * timestamp Sep 15, 2012 6:23:17 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for classes determine the object(s) that should be given control.
 *
 */
use proof\php\String;

interface Router
{


    /**
     * Parses a url and attempts to manufacture a object from it.
     * @param String $url    The url.
     */
    public function getObject(String $url);
   
}