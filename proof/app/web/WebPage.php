<?php
namespace proof\app\web;
/**
 * timestamp Sep 10, 2012 4:41:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * Document class for web pages.
 *
 */
use proof\util\Map;
use proof\util\ArrayList;
use proof\php\String;
use proof\php\Stringable;
use proof\php\Object;

class WebPage extends Object implements ContentContainer
{

    /**
     * Mapping for content added to the template.
     * @var proof\util\Map    $keys
     * @access private
     */
    private $keys;


    /**
     * Constructs a new WebPage
     * @param string $title    The title for the web page.
     * @param string $charset    The character set for the page.
     */
    public function __construct($title, $charset)
    {

        $this->keys = new Map;
        $this->keys->add('mime', 'text/html');
        $this->keys->add('title', (string)$title);
        $this->keys->add('charset', (string)$charset);

    }

    public function addContent($key, $content)
    {

        $this->keys->add($key, (string)$content);

        return $this;
    }

    public function render(\IteratorAggregate $list)
    {

        $key_count = extract($this->keys->toArray(), EXTR_PREFIX_INVALID, "key");

        foreach ($list as $import)
        {

            (include_once (string)$import);
        }


    }

}