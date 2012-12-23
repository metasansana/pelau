<?php
namespace proof\net\http;
/**
 * timestamp Sep 8, 2012 10:02:12 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Event representing a GET request.
 *
 */

class GetEvent extends HttpEvent
{

    protected function params()
    {

        return $_GET;

    }

}