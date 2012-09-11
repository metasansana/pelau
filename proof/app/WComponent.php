<?php
namespace proof\app;
/**
 * timestamp Sep 10, 2012 4:49:16 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * The WComponent interface is for classes that store html text.
 *
 *
 */
interface WComponent
{

    public function getName();

    public function getContent();

}