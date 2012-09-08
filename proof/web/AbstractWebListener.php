<?php
namespace proof\web;
/**
 * timestamp Sep 8, 2012 2:54:41 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\web
 *
 *  Class for making WebListener implementation easier.
 *
 */
class AbstractWebListener implements WebListener
{

    
    public function onGet(\proof\net\http\GetEvent $e)
    {

    }

    public function onHead(\proof\net\http\HeadEvent $e)
    {

    }

    public function onPost(\proof\net\http\PostEvent $e)
    {

    }
}