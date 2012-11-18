<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 10, 2012 5:48:40 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Interface for PDOState classes.
 *
 */
use proof\sql\SQLConnection;
use proof\sql\Transactable;

interface PDOState extends SQLConnection, Transactable
{


}