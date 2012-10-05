<?php
namespace proof\sql;
/**
 * timestamp Aug 4, 2012 11:15:10 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for classes that handle SQLEvents.
 *
 */
interface SQLEventListener
{

    public function onStateChange(StateEvent $e);

    public function onPush(PushEvent $e);

    public function onPull(PullEvent $e);


}