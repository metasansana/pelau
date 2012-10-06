<?php
namespace proof\sql;
/**
 * timestamp Oct 4, 2012 5:10:13 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Class representing SQL transactions.
 *   <p>The Transaction class wraps around an SQLSocket to provide the same functionality but with auto
 *   commit turned off at the application level (The database server may turn auto commit back on based on   *   the queries executed.
 */

class Transaction implements SQLSocket
{

    /**
     * The SQLSocket this transaction uses.
     * @var proof\sql\Socket $socket
     * @access private
     */
    private $socket;

    /**
     * Constructs a new Transaction
     * @param \proof\sql\SQLSocket $socket    The socket this transaction wraps.
     */
    public function __construct(SQLSocket $socket)
    {
        $this->socket = $socket;
    }


    public function create(String $sql)
    {

    }

    public function execute(SQLSocketCommand $cmd)
    {

    }

    public function prepare(String $sql)
    {

    }

    public function commit()
    {

    }

    public function cancel()
    {

    }

    public function close()
    {

    }

}