<?php
namespace proof\net\http;
/**
 * timestamp Sep 24, 2012 2:33:41 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for classes that fire HttpEvents.
 *
 */
interface HttpSource
{

    /**
     * Returns the requested url.
     */
    public function getURL();

    /**
     * Returns the remote address of this source.
     */
    public function getRemoteAddress();

}