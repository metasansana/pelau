<?php

namespace proof\net\http;


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
        $this->object = $this->getMockForAbstractClass("proof\\net\http\HttpEvent",
                array($this->getMock("proof\\net\http\HttpRequest"), $this->getMock("proof\php\Object")));

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers proof\net\http\HttpEvent::getParameters
     * @todo   Implement testGetParameters().
     */
    public function testGetParameters()
    {

        $this->assertInstanceOf("proof\util\Map", $this->object->getParameters());

    }

    /**
     * @covers proof\net\http\HttpEvent::getRequest
     * @todo   Implement testGetRequest().
     */
    public function testGetRequest()
    {

        $this->assertInstanceOf("proof\\net\http\HttpRequest", $this->object->getRequest());

    }

    /**
     * @covers proof\net\http\HttpEvent::getUrl
     * @todo   Implement testGetUrl().
     */
    public function testGetUrl()
    {


        $this->assertInstanceOf("proof\\net\Url", $this->object->getUrl());


    }

}