<?php
namespace proof\sql;
/**
 * timestamp Nov 10, 2012 4:31:06 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Class representing a connection to an sql database.
 *
 */
use proof\php\Closable;

interface SQLConnection extends Closable
{

    /**
     *  Creates a Statement class from an String.
     * @param string $sql    SQL statement in string form.
     * @return proof\sql\Statement    The Statement.
     */
    public function create($sql);

    /**
     * Creates a PreparedStatement class from an String.
     * @param string $sql    SQL statement in string form.
     * @return proof\sql\PreparedStatement    The PreparedStatement.
     */
    public function prepare($sql);



}