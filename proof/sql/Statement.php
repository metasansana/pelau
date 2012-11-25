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

    /**
     * Treats the Statement as a query.     
     * @param \proof\util\Sequence $s
     */
    public function query(Sequence $s);

    /**
     * Treats the statement as an update.
     */
    public function update();

}