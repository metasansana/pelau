<?php
namespace proof\util;
/**
 * timestamp Sep 8, 2012 3:38:06 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Interface for handling bus events.
 *
 */
interface EventHandler
{

    public function onEvent(Event $e);

}