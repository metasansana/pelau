<?php

namespace proof\util;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-14 at 15:13:18.
 */
class PHPIteratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var PHPIterator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PHPIterator(array (0, 1, 2, 3));

    }

    private function iterate(PHPIterator $i)
    {

        $count = 0;

        foreach ($i as $key => $value)
        {

            $this->assertEquals($key, $value);

            $count++;


        }

        return $count;

    }

    public function testWithValues()
    {

       $this->assertEquals(4, $this->iterate($this->object));

    }

    public function testWithoutValues()
    {

        $this->assertEquals(0, $this->iterate(new PHPIterator(array ())));

    }

}
