<?php
namespace proof\net\http;
/**
 * timestamp Nov 4, 2012 10:16:00 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package  proof\net\http
 *
 *  Interface for creating state in http transactions.
 *
 */
interface Cache
{

    /**
     * Stores a value that can be retrieved upon later requests.
     * @param string $key
     * @param mixed $value
     * @return proof\net\http\Cache
     */
    public function store($key, $value);
}