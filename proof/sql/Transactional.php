<?php
namespace proof\sql;
/**
 * timestamp Nov 15, 2012 4:11:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for initiating sql transactions.
 *
 */
interface Transactable
{

   /**
    * Issues a Transaction handle that must be used for queries/updates until commit or rollback.
    * @return proof\sql\Transaction
    */
    public function begin();

}