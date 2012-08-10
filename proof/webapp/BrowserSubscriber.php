<?php

namespace proof\webapp;


/**
 * timestamp Jul 30, 2012 4:53:07 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\webapp
 *
 *  Interface for listening to browser events.
 *
 */
use proof\util\Map;
use proof\util\Vector;

interface BrowserSubscriber
{

    public function onGet(Browser $browser, Vector $path, Map $args);

    public function onPost(Browser $browser, Vector $path, Map $args);

}