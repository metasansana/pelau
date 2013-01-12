<?php

namespace pelau\util;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-14 at 14:23:11.
 */
class ArrayListTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ArrayList
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ArrayList;

    }

    /**
     * @covers pelau\util\ArrayList::add
     */
    public function testAdd()
    {

        $this->assertInstanceOf(get_class($this->object), $this->object->add(new \stdClass()));

    }

}
