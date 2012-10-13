<?php
namespace proof\sql;
/**
 * timestamp Oct 13, 2012 11:01:19 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Common interface for providing credentials needed to create a PDO connection.
 *
 */
interface PDODefinition
{

    public function getUserName();

    public function getPassword();

    public function getDSN();



}