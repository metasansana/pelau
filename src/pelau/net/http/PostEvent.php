<?php
namespace pelau\net\http;

/**
 * timestamp Sep 8, 2012 10:02:03 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *
 */
class PostEvent extends HttpEvent
{


    protected function params()
    {

        return $_POST;

    }
}