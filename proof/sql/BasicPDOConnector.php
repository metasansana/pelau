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
final class BasicPDOConnector implements PDOConnector
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

    public function connect(ConnectorErrorHandler $e = NULL)
    {


        try
        {

            $pdo = new \PDO($this->dsn, $this->usr, $this->passwd);
            return $pdo;
        }
        catch (\PDOException $exc)
        {
            if ($e)
                $e->onError($ex);
            return null;
        }

    }

}