<?php

/**
 *
 * timestamp: Dec 4, 2012 4:36:15 AM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
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
 * @package pelau\sql
 *
 *  Wrapper class that uses an anonymous function to generate sql query strings.
 */

namespace pelau\sql;

use pelau\util\Map;
use pelau\php\String;




class SQLClosure implements SQLFactory
{

    /**
     * The closure that will be used to generate sql.
     * @var \Closure $c
     * @access private
     */
    private $c;

    /**
     * Constructs a SQLClosure object.
     * @param \Closure $c
     */
    public function __construct(\Closure $c)
    {

        $this->c = $c;

    }

    public function generate(Map $bindings)
    {

        $c = $this->c;

        return new String($c($bindings));

    }
}