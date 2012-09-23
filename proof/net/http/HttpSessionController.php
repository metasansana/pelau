<?php
namespace proof\net\http;
/**
 * timestamp Sep 23, 2012 12:26:46 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for controling an http session.
 *
 */
interface HttpSessionController
{

    /**
     * Starts an http session.
     * @param mixed $name = NULL    The name of the session to start, if NULL the default settings take effect.
     */
    public function start($name=NULL);

    /**
     * Regenerates a new session identifier for the current session.
     */
    public function regenerate();

    /**
     * Destroys the current session.
     */
    public function destroy();

    /**
     * Returns TRUE if a session is active.
     * @return boolean
     */
    public function isActive();

}