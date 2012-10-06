<?php
namespace proof\sql;

/**
 * timestamp Oct 3, 2012 5:17:36 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *
 */
class StateEvent  extends SQLEvent
{
    /**
     *  A five character alphanumeric identifier of the sql state defined in the ANSI SQL standard.
     * @var string $state
     * @access private
     */
    private $state;

    /**
     * The error code of the operation that caused this event
     * @var int $code
     * @access private
     */
    private $code;

    /**
     * An error message associated with the operation that caused this event.
     * @var string $message
     * @access private
     */
    private $message;

    /**
     * A reference to the connection used to execute this query.
     * @var proof\sql\PDOConnection    $con
     * @access private
     */
    private $con;


    /**
     * Constructs a new StateEvent to represent SQL state change.
     * @param string $state
     * @param int $code
     * @param string $message
     * @param \proof\sql\SQLCommand $source
     */
    public function __construct($state, $code, $message, SQLCommand $source)
    {

        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
        parent::__construct($source);

    }

    /**
     * Returns the ANSI code for the new state.
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Returns a database driver specific error code.
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the message associated with the sql state.
     * @return string
     */
    public  function getMessage()
    {
        return $this->message;
    }

}