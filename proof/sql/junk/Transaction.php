<?php
namespace proof\sql;
/**
 * timestamp Oct 7, 2012 12:08:29 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Class representing transaction mode SQL.
 *
 */
use proof\php\String;

class Transaction implements SQLTransaction
{

    /**
     * The SQLTransaction being wrapped.
     * @var proof\sql\Transaction    $proxy
     * @access private
     */
    private $proxy;

    public function __construct(SQLTransaction $proxy)
    {

        $this->proxy = $proxy;

    }

    public function cancel()
    {

        $this->proxy->cancel();
        return $this;
    }

    public function close()
    {


        $this->proxy->close();

    }

    public function commit()
    {
        return $this->proxy->commit();
    }

    public function create(String $sql)
    {

        return $this->proxy->create($sql);

    }

    public function prepare(String $sql)
    {
        return $this->proxy->prepare($sql);
    }
}