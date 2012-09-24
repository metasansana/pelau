<?php
namespace proof\app\web;
/**
 * timestamp Sep 24, 2012 2:06:45 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *  WebModels are the classes that implement actual application logic. They are normally created with WebListeners.
 *
 *
 */
interface WebModel
{

    public function execute();
}