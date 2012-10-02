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

class PDOConnection implements SQLConnection
{

    /**
     * Internal PDO object.
     * @var \PDO $con
     * @access protected
     */
    protected $con = NULL;

    /**
     * Constructs a new PDOConnection for wrapping the \PDO class.
     * @param \PDO $con          A PDO object.
     */
    public function __construct(\PDO $con)
    {


        $this->con = $con;

    }

    public function create(String $sql)
    {

        return new Statement($sql, $this->con);

    }

    public function prepare(String $sql)
    {

        return new PreparedStatement($this->con->prepare((string)$sql));

    }

    public function close()
    {
        $this->con = NULL;
    }

}