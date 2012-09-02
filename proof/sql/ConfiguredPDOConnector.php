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
 * <p>Abstract class for defining custom PDOConnectors. All child classes must implement the connect method,
 *this is where customisation should take place <i>(usually via calling PDO::setAttribute())<i/>.</p>
 *
 *
 *
 *
 *
 *
 *
 */

use proof\php\String;

abstract class ConfiguredPDOConnector implements PDOConnector
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

    public function create(String $sql)
    {
        return $this->pcon->create($sql);
    }

    public function disconnect()
    {

        $this->pcon->disconnect();

    }

    public function isConnected()
    {

        return $this->pcon->isConnected();

    }

    public function prepare(String $sql)
    {

        return $this->pcon->prepare($sql);
    }

}