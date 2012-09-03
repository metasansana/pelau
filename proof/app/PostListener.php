<?php
namespace proof\app;
/**
 * timestamp Aug 22, 2012 4:57:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  PostListener implementers can listen to post events sent from a user agent and respond
 *  by taking control of the application logic.
 *
 */
use proof\util\Map;

interface PostListener
{

    public function onPost(Browser $browser, Map $args);

}