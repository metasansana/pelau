<?php

namespace proof\sql;

/**
 * timestamp Aug 4, 2012 9:00:02 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  FastStatement represents an SQL statement that will be executed in one trip, that is, without preperation.
 *  <b>The contents of FastStatements should be properly escaped to defened against SQL injection attacks.</b>
 *SQLInstruction
 */

class Statement implements SQLStatement
{

    /**
<<<<<<< HEAD
     * Treats the Statement as a query.     
     * @param \proof\util\Sequence $s
     */
    public function query(Sequence $s);

    /**
     * Treats the statement as an update.
     */
    public function update();

=======
     * An sql statement string
     * @var proof\php\String
     */
    private $stmt;


   /**
    * Constructs a new Statement class.
    * @param \proof\sql\SQLStatement $stmt    The SQLStatement class this class will wrap around.
    */
    public function __construct(SQLStatement $stmt)
    {

        $this->stmt = $stmt;
    }

    public function fetch(TupleSet $set)
    {

        return $this->stmt->fetch($set);

    }

    public function push()
    {

        return $this->stmt->push();

    }

>>>>>>> Black Friday?
}