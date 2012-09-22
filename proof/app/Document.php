<?php
namespace proof\app;
/**
 * timestamp Sep 22, 2012 10:05:44 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for creating a document 'view' such a a web page, xml document etc.
 *
 */
use proof\php\String;
use proof\php\Stringable;

interface Document
{

    /**
     * Adds a template to the document to be included upon rendering.
     * @param String $filepath
     * //@todo this method will accept a File class in future.
     */
    public function addTemplates(String $filepath);

    /**
     * Removes all the items and templates from the document.
     */
    public function clear();

    /**
     * Returns the value of a key if it exists.
     * @param mixed $key    The key to be returned.
     * @return mixed | NULL    The key's value or NULL if it does not exist.
     */
    public function get($key);

    /**
     * Puts a key into the document's queue.
     * @param mixed $key    The key.
     * @param \proof\php\Stringable $item    An item that can be stored as text.
     */
    public function put($key, Stringable $item);

    /**
     * Instantly displays text on the Document.
     * @param mixed $text
     */
    public function write($text);

    /**
     * Includes all templates and makes the internal key queue available to them.
     */
    public function render();
}