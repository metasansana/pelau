<?php

namespace pelau\sql;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-06 at 22:04:45.
 */

use pelau\helpers\PDOHelper;


class PDOStatementProxyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var PDOStatementProxy
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PDOStatementProxy;

    }

    /**
     * @covers pelau\sql\PDOStatementProxy::dofetch
     */
    public function testDofetch()
    {

        //Assumes there is one record in the database "users".
        $con = PDOHelper::getPDO();

        $this->assertEquals(1, $this->object->dofetch($con->query("SELECT * FROM users"),
                $this->getMock("pelau\sql\TupleSet")));



    }

    /**
     * @covers pelau\sql\PDOStatementProxy::generateException
     * @expectedException pelau\sql\SQLException
     */
    public function testGenerateException()
    {
        $con = PDOHelper::getPDO();

        $con->query("garbar31");

        $this->object->generateException($con->errorInfo());

    }

}
