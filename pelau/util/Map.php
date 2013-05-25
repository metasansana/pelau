<?php
namespace pelau\util;
/**
 * timestamp Jul 22, 2012 7:10:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 * Collection that allows keys to be assigned when adding to it.
 *
 */
class Map extends Collection implements \ArrayAccess
{

    /**
     * Sets a value to a key.
     * @param string $key
     * @param mixed $item
     * @return \pelau\util\Map
     */
    public function set($key, $item)
    {

        $this->items["$key"] = $item;

        return $this;

    }

    public function offsetSet($offset, $value)
    {

        $this->set($offset, $value);

    }

    public function offsetExists($offset)
    {

        return $this->hasKey($offset);

    }

    public function offsetGet($offset)
    {

        return $this->get($offset);

    }

    public function offsetUnset($offset)
    {

        $this->remove($offset);

    }
}