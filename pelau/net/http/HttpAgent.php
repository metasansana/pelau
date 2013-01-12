<?php
namespace pelau\net\http;
/**
 * timestamp Oct 21, 2012 4:43:36 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proff\net\http
 *
 *  Interface for classes that represents the source of HttpEvents.
 *
 */
interface HttpAgent extends HttpSource
{

    /**
     *Returns the current user agent string.
     * @return pelau\php\String     The user agent string.
     */
    public function getUAString();

}