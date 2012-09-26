<?php
namespace proof\util;

/**
 * timestamp Sep 26, 2012 4:59:21 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Interface for classes that publish events to an EventBus.
 *
 */
interface Broadcaster
{

    public function registerEventBus(EventBus $b);

}