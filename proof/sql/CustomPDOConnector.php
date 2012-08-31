<?php
namespace proof\sql;

/**
 * timestamp Aug 31, 2012 10:43:30 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  This class is the parent class of all PDOConnector wrappers.
 *
 * <p>Use this class to define your own PDOConnector that changes PDO attributes specific to your application.</p>
 * <b>Note: Connecting to a database may succed or fail, when implementing connect(), consider this</b>
 * <p>Example:</p>
 *
 * //MyConnector extends CustomPDOConnector
 * $con = MyConnector(BasicPDOConnector($dsn, $usr, $passwd));
 * $pdo = $con->connect(error_handler);
 *
 */

abstract class CustomPDOConnector implements PDOConnector
{

    /**
     * A PDOConnector object this class wraps around.
     * @var proof\sql\PDOConnector $pcon
     * @access protected
     */
    protected $pcon;

    /**
     * Constructs a CustomPDOConnector
     * @param \proof\sql\PDOConnector $pcon    The PDOConnector this connector wraps.
     */
    public function __construct(PDOConnector $pcon)
    {

        $this->pcon = $pcon;

    }

}