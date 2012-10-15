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

class WebTemplate implements HtmlTemplate
{

    /**
     * Mapping for content added to the template.
     * @var proof\util\Map    $keys
     * @access private
     */
    private $keys;

    /**
     * List of templates.
     * @var proof\util\ArrayList    $tmpls
     * @access private
     */
    private $tmpls;

    /**
     * The directory that templates will be included from.
     * @var string    $dir
     * @access private
     */
    private $dir;

    public function __construct(String $dir, String $title, String $charset)
    {

        $this->keys = new Map;
        $this->tmpls = new ArrayList;
        $this->dir = "$dir";
        $this->keys->add('mime', 'text/html');
        $this->keys->add('title', "$title");
        $this->keys->add('charset', "$charset");

    }

    public function add(String $tmpl)
    {
        $this->tmpls->add("$tmpl");
        return $this;
    }

    public function clear()
    {
        $this->tmpls->clear();
        $this->keys->clear();
    }

    public function put($key, Stringable $item)
    {
        $this->keys->add($key, "$item");
    }

    public function render()
    {

        $doc_key_count = extract($this->keys->toArray(), EXTR_PREFIX_INVALID, "doc");

        foreach ($this->tmpls as $import)
        {
            include_once($this->dir.DIRECTORY_SEPARATOR.$import);
        }
    }

    public function write(Stringable $text)
    {
        echo "$text";
    }


}