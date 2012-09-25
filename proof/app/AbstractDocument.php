<?php
namespace proof\app;
/**
 * timestamp Sep 22, 2012 10:28:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Abstract implementation of the Document interface.
 *
 */
use proof\php\String;
use proof\php\Stringable;
use proof\util\Map;
use proof\util\ArrayList;
use proof\php\Object;

class AbstractDocument extends Object implements Document
{

    /**
     * The internal queue of tempaltes.
     * @var proof\util\ArrayList
     * @access protected
     */
    protected $templates;

    /**
     * The internal queue of keys.
     * @var proof\util\Map
     * @access protected
     */
    protected $keys;

    /**
     * The path to the template directory.
     * @var proof\php\String    $dir
     * @access protected
     */
    protected $dir = "";

    /**
     * Constructs a new Document.
     */
    public function __construct()
    {
        $this->keys = new Map;
        $this->templates = new ArrayList;
    }


    public function addTemplate(String $filepath)
    {

        $this->templates->add((string)$filepath);

        return $this;
    }

    public function clear()
    {
        $this->templates->clear();
        $this->keys->clear();
    }

    public function get($key)
    {

        if($this->keys->indexAt($key))
            return $this->keys->get ($key);

    }

    public function put($key, Stringable $item)
    {
        $this->keys->add($key, (string)$item);

        return $this;
    }

    public function render()
    {
        $page = $this->keys->toArray();

        foreach($this->templates as $value)
            include_once "{$this->dir}$value";

    }

    public function write($text)
    {
        echo $text;
    }

    public function setDirectory(String $path)
    {

        $this->dir = (string)$path.DIRECTORY_SEPARATOR;

    }
}