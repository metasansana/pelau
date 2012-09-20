<?php

namespace proof\net;

/**
 * timestamp Sep 18, 2012 5:13:18 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net
 *
 *  Class representing a url.
 * <i>Note: Incomplete class marked for review.</i>
 *
 */
use proof\php\Object;
use proof\php\String;
use proof\util\ArrayList;
use proof\php\Stringable;

class Url extends Object implements Stringable
{

    /**
     * The value of this url.
     * @var proof\php\String $url
     * @access private
     */
    private $url;

    /**
     * Constructs a new url.
     * @param String $url    String value of the url.
     * <i>Note: This may or may not be a valid url formated String.<i>
     */
    public function __construct(String $url)
    {
        $this->url = $url;

    }

    public function getPath()
    {

        //@todo this should use some kind of filtering class.
        $url = urldecode((string) $this->url);

        return new String(parse_url((String) $url, PHP_URL_PATH));

    }

    public function getCleanPath()
    {


        return new ArrayList($this->getPath()->split('/'));

    }

    public function getHost()
    {

    }

    public function getProtocol()
    {

    }

    public function getPort()
    {

    }

    public function getQueryString()
    {

    }

    public function getFragment()
    {

    }

    public function __toString()
    {

        return $this->url;

    }

}