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
use proof\app\AbstractDocument;
use proof\php\String;

class HtmlDocument extends AbstractDocument
{

    public function __construct()
    {
        parent::__construct();
        $this->keys->add('mime', 'text/html');

    }

    /**
     * Makes text for a charset type available to templates.
     * @param String $set
     * @return \proof\app\web\HtmlDocument
     */
    public function setCharacterSet(String $set)
    {
        $this->keys->add('charset', $set);
        return $this;
    }

    /**
     * Makes text for the document title available to templates.
     * @param String $title
     * @return \proof\app\web\HtmlDocument
     */
    public function setTitle(String $title)
    {
        $this->keys->add('title', $title);
        return $this;
    }

}