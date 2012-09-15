<?php
namespace proof\app;
/**
 * timestamp Sep 11, 2012 5:08:45 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for objects that make up the ui output.
 *
 */
use proof\php\Stringable;

interface Component extends Stringable
{

public function getName();

public function getContent();

}