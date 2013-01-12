<?php
namespace pelau\net\http;
/**
 * timestamp Nov 6, 2012 6:24:40 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Class used for responding to a client.
 *
 */
use pelau\php\Object;

class HttpResponse extends Object implements HttpSender
{

    /**
     * The status code.
     * @var int $code
     * @access private
     */
    private $code;


    /**
     * Constructs a new HttpResponse object.
     * @param int $code
     */
    public function __construct($code = null)
    {

        $this->setStatus($code);

    }

    private function _send($header)
    {

        header($header, FALSE, $this->code);
        return $this;

    }

    public function redirect($dest)
    {

        return $this->_send($dest);

    }

    public function send($header)
    {

        return $this->_send($header);


    }

    public function setContentType($type)
    {

        return $this->_send("Content-type: $type");

    }

    public function setStatus($code)
    {

        $this->code = (int)$code;
        return $this;

    }
}