<?php
namespace proof\net\http;
/**
 * timestamp Nov 6, 2012 4:36:01 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Contains methods relating to headers.
 *
 */
class Headers
{

    /**
     * The filename where output started.
     * @var string $filename
     * @access static
     */
    static $filename;

    /**
     * The line number where output started.
     * @var string $linenum
     * @access static
     */
    static $linenum;


    static function headersSent()
    {
        return headers_sent(Headers::$filename, Headers::$linenum);
    }

}