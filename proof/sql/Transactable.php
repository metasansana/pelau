<?php
namespace proof\sql;
/**
 * timestamp Oct 4, 2012 9:04:26 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for classes that can start sql transactions.
 *
 */
interface Transactable
{

    /**
     * Initializes a transaction by turning off auto commit mode.
     * @return proof\sql\Transaction    A Transaction object reffering to the current transactio0n.
     */
    public function startTransaction();

}