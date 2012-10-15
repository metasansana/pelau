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
 * Interface for creating generic documents.
 *
 */
use proof\php\Stringable;

interface Document
{

    /**
     * Clears the document of any content.
     */
    public function clear();

    /**
     * Instantly displays text on the Document.
     * @param Stringable $text
     */
    public function write(Stringable $text);

    /**
     * Includes all templates and makes the internal key queue available to them.
     */
    public function render();
}