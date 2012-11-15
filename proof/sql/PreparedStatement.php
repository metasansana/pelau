<?php
namespace proof\sql;
/**
 * timestamp Nov 10, 2012 6:40:46 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface representing a PreparedStatement
 *
 */
interface PreparedStatement extends Statement
{

    public function bind($value);

    public function bindName($name, $value);

}