<?php
namespace proof\app\web;
/**
 * timestamp Oct 20, 2012 4:43:42 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *  Interface  for storing a web app's content.
 *
 */
use proof\util\Iterator;

interface ContentContainer
{

    /**
     * Adds content to the container.
     * @param mixed $key
     * @param string $content
     */
    public function addContent($key, $content);

    /**
     * Makes content visible by attempting to include file paths from an iterable list.
     */
    public function render(\IteratorAggregate $list);

}