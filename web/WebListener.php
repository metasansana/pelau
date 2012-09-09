<?php
namespace proof\app\web;

/**
 * timestamp Sep 8, 2012 2:43:45 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\web
 *
 *  Interface for classes that respond to visitor requests.
 *
 */
use proof\net\http\GetEvent;
use proof\net\http\PostEvent;
use proof\net\http\HeadEvent;

interface WebListener
{

    /**
     * Called when the request type is GET.
     * @param \proof\net\http\GetEvent $e
     */
    public function onGet(GetEvent $e);

    /**
     * Called when the request type is POST
     * @param \proof\net\http\PostEvent $e
     */
    public function onPost(PostEvent $e);

    /**
     * Called when the request is HEAD.
     * @param \proof\net\http\HeadEvent $e
     */
    public function onHead(HeadEvent $e);

}