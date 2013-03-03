<?php

/**
 *
 * timestamp: Mar 3, 2013 3:13:44 AM
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
 * @package pelau\net
 *
 * Class representing a URI.
 */
namespace pelau\net;

use pelau\util\String;

class URI
{

    /**
     * The value of this uri.
     * @var string $value
     * @access private
     */
    private $value;

    public function __construct($value)
    {

        $this->value = (value);

    }

    public function toPath()
    {
        return new String(parse_url($this->value, PHP_URL_PATH));
    }




}