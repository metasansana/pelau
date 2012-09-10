<?php
namespace proof\app;
/**
 * timestamp Sep 9, 2012 9:18:34 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for representing the 'view' users see.
 *
 */
use proof\php\String;

interface Window
{

    public function addTemplate(String $template);

    public function addComponent(Component $c);

    public function flushTemplates();

    public function flushComponents();

    public function render();

}