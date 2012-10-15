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
 *  Interface for composite html templates.
 *
 */
use proof\php\String;
use proof\php\Stringable;
use proof\app\Document;

interface HtmlTemplate extends Document
{

    /**
     * Adds a template that will be included upon rendering
     * @param String $tmpl
     * @todo this method will accept a File class in future.
     */
    public function add(String $tmpl);

     /**
     * Adds a value that will be made available to templates via its variable name.
     * @param mixed $key    The key.
     * @param \proof\php\Stringable $item    An item that can be stored as text.
     */
    public function put($key, Stringable $item);


}