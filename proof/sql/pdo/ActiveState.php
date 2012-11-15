<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 15, 2012 3:09:42 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Class representing the current state of a PDOConnection.
 *
 */
class ActiveState implements PDOState
{

    /**
     * The current state of the connection.
     * @var proof\sql\pdo
     * @access private
     */
    private $state;

    /**
     * Constructs a new ActiveState object.
     * @param \PDO $pdo The PDO object for the states.
     */
    public function __construct(\PDO $pdo)
    {
        $this->state = new ValidState($pdo, $this);
    }

    /**
     * Switches the internal state with the given state.
     * @param \proof\sql\pdo\PDOState $state
     * @return proof\sql\pdo\PDOState The previous state.
     */
    public function swap(PDOState $state)
    {

        $current = $this->state;

        $this->state = $state;

        return $current;

    }

    public function create($sql)
    {

        return $this->state->create ($sql);

    }

    public function prepare($sql)
    {

        return $this->state->prepare($sql);

    }

    public function initiate()
    {

        return $this->state->initiate();

    }





}