<?php
namespace pelau\net\http;
/**
 * timestamp Nov 8, 2012 4:26:03 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Interface for sending http headers.
 *
 */
interface HttpSender
{

    /**
     * Sends a content type header.
     * @param string $type
     */
    public function setContentType($type);

    /**
     * Sets the status code for subsequent headers.
     * @param int $code
     */
    public function setStatus($code);

    /**
     * Sends a redirect request.
     * @param string $dest
     */
    public function redirect($dest);

    /**
     * Sends a user defined header.
     * @param string $header
     */
    public function send($header);

}