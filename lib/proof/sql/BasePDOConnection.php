<?php

namespace proof\sql;


/**
 * timestamp Aug 30, 2012 5:30:36 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Implements the PDOConnector interface to provide a basic PDO connection.
 *
 *  <i>Note: This class is a basic connector with no PDO attributes set other than the defaults. Sub class or use a
 *  subclass of CustomPDOConnector to get your desired functionality.</i>
 *
 *
 */

use proof\php\String;

final class BasePDOConnection implements PDOConnection
{

    /**
     * The DSN for the pdo object.
     * @var string
     * @access private
     */
    private $dsn;

    /**
     * The username for the database.
     * @var string
     * @access private
     */
    private $usr;

    /**
     * The password for the database.
     * @var string
     * @access private
     */
    private $passwd;

    /**
     * Internal PDO object.
     * @var \PDO $con
     * @access protected
     */
    protected $con = NULL;

    /**
     * Constructs a new PDOConnector
     * @param string $dsn          DSN
     * @param string $usr           User name
     * @param string $passwd    Password
     */
    public function __construct($dsn, $usr, $passwd)
    {


        $this->dsn = $dsn;
        $this->usr = $usr;
        $this->passwd = $passwd;

    }

    protected function checkConnection()
    {

        if (!$this->isConnected())
            throw new NullConnectionException;

    }

    public function connect(ConnectionErrorHandler $e = NULL)
    {


        try
        {

            $this->con = new \PDO($this->dsn, $this->usr, $this->passwd);

            return TRUE;
        }
        catch (\PDOException $exc)
        {
            if ($e)
                $e->onError($ex);

            return FALSE;

        }


    }

    public function isConnected()
    {
        if ($this->con)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }

    public function disconnect()
    {
        $this->con = NULL;

    }

    public function create(String $sql)
    {

        $this->checkConnection();

        return new Statement($sql, $this->con);

    }

    public function prepare(String $sql)
    {

        $this->checkConnection();

        return new PreparedStatement($this->con->prepare($sql));

    }

}