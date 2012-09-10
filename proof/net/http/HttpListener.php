<?php
namespace proof\net\http;
/**
 * timestamp Sep 9, 2012 6:57:39 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for listening to HTTP events (GET, POST and HEAD are supported).
 *
 */
interface HttpListener extends GetListener, PostListener, HeadListener, PutListener
{

}