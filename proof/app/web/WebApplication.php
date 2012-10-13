<?php
namespace proof\app\web;
/**
 * timestamp Sep 24, 2012 11:52:39 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 * Application interface for database driven web applications.
 *
 *
 */
use proof\app\Application;

interface  WebApplication extends Application
{

      public  function getSessionManager();

      public function getCookieManager();

}