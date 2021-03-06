<?php
namespace pelau\sql;
/**
 * timestamp Oct 6, 2012 11:51:55 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 *  Exception class for SQL related errors.
 *
 */
class SQLException extends \Exception
{

    /**
     *  A five character alphanumeric identifier of the sql state defined in the ANSI SQL standard.
     * @var string $state
     * @access private
     */
    private $state;


    /**
     * Constructs a new SQLException
     * @param string $state
     * @param int $code
     * @param string $message
     */
    public function __construct($state, $code, $message)
    {

        $this->state = $state;
        parent::__construct($message, $code);

    }

    /**
     * Returns the state code asscociated with this exception.
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

}