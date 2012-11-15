<?php
namespace proof\sql;
/**
 * timestamp Nov 10, 2012 6:28:28 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface representing an SQL Statement
 *
 */
use proof\util\Sequence;

interface Statement
{

    public function query(Sequence $s);

    public function update();
    
}