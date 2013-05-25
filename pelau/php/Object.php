<?php

/**
 *
 * timestamp: Dec 25, 2012 10:10:01 PM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
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
 * Parent class of all pelau objects.
 *
 * This class provides methods for interacting with an object while it is in memory.
 */

namespace pelau\php;

class Object
{

    /**
     * Returns the class name for this object.
     * @return string    The class name of this object.
     */
    public function getClass()
    {
        return get_class($this);
    }

    /**
     * Returns the string value of this object.
     * @return string
     */
    public function __toString()
    {
        return $this->getClass();
    }

}