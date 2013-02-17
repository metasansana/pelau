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
 * Abstract parent class of all pelau types.
 *
 */

namespace pelau\php;

abstract class Type extends Object
{

    /**
     * The current value of this type
     * @var mixed $value
     * @access protected
     */
    protected $value;

    public function __construct($value)
    {

        $this->value = $value;

    }

    /**
     * Returns the value of this type.
     */
    public function __toString()
    {

        return (string)$this->value;

    }

}