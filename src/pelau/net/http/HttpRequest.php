<?php
namespace pelau\net\http;
/**
 * timestamp Sep 9, 2012 7:33:07 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Class for querying the properties of an HTTP request.
 *
 */
use pelau\php\Object;
use pelau\php\String;
use pelau\util\ArrayList;

class HttpRequest extends Object
{
    /**
     * Returns a property of the request.
     * @param string $key
     * @return mixed
     */
    static  public function getProperty($key)
    {

                return @$_SERVER[$key];
    }

    static public function getPath()
    {
        return new String(self::getProperty('REQUEST_URI'));
    }

    static public function getPathList()
    {
        $list =  new ArrayList(self::getPath()->split('/'));
        $list->remove(0);
        return $list;
    }

}