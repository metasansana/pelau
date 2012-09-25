<?php
namespace proof\app;
/**
 * timestamp Sep 23, 2012 11:23:35 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Inteface for the main class of web applicatons.
 *
 */
use proof\app\DatabaseApplication;

interface WebApplication extends DatabaseApplication
{

    public function getSessionManager();

    public function getCookieManager();


}