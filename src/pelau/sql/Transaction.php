<?php
namespace pelau\sql;
/**
 * timestamp Nov 15, 2012 3:20:41 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 *  Class representing a handle to an sql transaction session.
 *
 */
interface Transaction extends SQLConnection
{

    /**
     * Commits changes made during the transaction.
     */
    public function commit();

    /**
     * 'Rolls back' any changes made during the transaction.
     */
    public function rollback();

}