<?php

/**
 *
 * timestamp: May 11, 2013 12:45:31 PM
 * encoding: UTF-8
 *
 * Copyright 2013  Lasana Murray <dev@trinistorm.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package pelau\php
 *
 * Object for storing and retrieving data values.
 */
namespace pelau\util;

class DataObject extends \pelau\php\Object implements \IteratorAggregate
{

private $data;

    public function __construct(array $data = array())
    {

        $this->data = new Map($data);


    }

    public function __get($name)
    {

        if($this->data->hasKey($name))
            return $this->data->get ($name);

    }

    public function __set($name, $value)
    {
        $this->data->set($name, $value);
        return $this;

    }

    public function getIterator()
    {
        return $this->data->getIterator();
    }

}