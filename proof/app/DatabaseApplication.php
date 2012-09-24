<?php
namespace proof\app;
/**
 * timestamp Sep 24, 2012 12:47:12 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for database driven applications.
 *
 */
use proof\php\String;

interface DatabaseApplication extends Application
{

    /**
     *
     */
    /**
     * Returns a PDOConnection object specific to the application.
     * @param String $dsn=NULL    Optional dsn for the connection.
     */

    public function getPDOConnection(String $dsn = NULL);

}