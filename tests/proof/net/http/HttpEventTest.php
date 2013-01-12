<?php

namespace pelau\net\http;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-20 at 05:04:18.
 */
class HttpEventTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var HttpEvent
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForAbstractClass("pelau\\net\http\HttpEvent",
                array(new MockHttpSource));

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers pelau\net\http\HttpEvent::getParameters
     * @todo   Implement testGetParameters().
     */
    public function testGetParameters()
    {


        $this->assertInstanceOf("pelau\util\Map", $this->object->getParameters());

    }


}
