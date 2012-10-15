<?php
namespace proof\app\web;
/**
 * timestamp Oct 14, 2012 10:55:55 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *
 */
use proof\php\String;
use proof\php\Stringable;
use proof\app\Document;

interface HtmlDocument extends Document
{

    /**
     * Adds a template to the document to be included upon rendering.
     * @param String $filepath
     * @todo this method will accept a File class in future.
     */
    public function addTemplate(String $filepath);

     /**
     * Puts a key into the document's queue.
     * @param mixed $key    The key.
     * @param \proof\php\Stringable $item    An item that can be stored as text.
     */
    public function put($key, Stringable $item);

    
}