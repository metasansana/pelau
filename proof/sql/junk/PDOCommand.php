<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 10, 2012 7:20:46 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 * Interface for executing PDO related commands.
 *
 */
use proof\util\Command;

abstract class PDOCommand implements Command
{

    /**
     * The PDO link.
     * @var \PDO $pdo
     * @access protected
     */
    protected $pdo;

    public function enable(\PDO $pdo)
    {

        $this->pdo = $pdo;

        return $this;

    }

    /**
     * Releases the pdo link for this command.
     */
    public function invalidate()
    {

        unset($this->pdo);

    }


}