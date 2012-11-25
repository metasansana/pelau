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

interface Container
{

    /**
     * Adds content to the container.
     * @param mixed $key
     * @param string $content
     */
    public function add($key, $content);

    /**
     * Shows the content of this container to a web app user.
     */
    public function show();

}