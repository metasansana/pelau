<?php
namespace proof\net\http;
/**
 * timestamp Nov 5, 2012 4:30:15 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface representing http session interaction.
 *
 */
interface HttpSessionState
{

    /**
     * Attempts to start a session.
     * @return boolean    True on success, false if otherwise.
     */
    public function  activate();

    /**
     * Attempts to regenerate the identifier for a sesison
     * @return boolean    True on success, false if otherwise.
     */
    public function regenerate();

    /**
     * Attempts to destroy a session.
     * @return boolean    True on success, false if otherwise.
     */
    public function destroy();

    /**
     * Stores a value to the http session.
     * @param string $key
     * @param mixed $value
     * @return proof\net\http\HttpSessionState
     */
    public function put($key, $value);

    /**
     * Returns value stored from a previous session in an active session
     * @return proof\util\Map    The previously stored values.
     */
    public function getPrevious();



}