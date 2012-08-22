<?php
namespace proof\app;

/**
 * timestamp Aug 22, 2012 5:01:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * GetListener implementers can listen to post events sent from a user agent and respond
 * by taking control of the application logic.
 *
 */
interface GetListener
{

    public function onGet(Browser $browser, ArrayList $cleanurl, ArrayList $args);

}