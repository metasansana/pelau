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
 * @package proof\sql
 *
 *  Generates sql from a closure.
 */

namespace proof\sql;

use proof\util\Map;
use proof\php\String;



class AnonSQLCompiler implements SQLCompiler
{

    /**
     * The closure that will be used to generate sql.
     * @var \Closure $c
     * @access private
     */
    private $c;

    public function __construct(\Closure $c)
    {

        $this->c = $c;

    }

    public function compile(Map $bindings)
    {

        $c = $this->c;

        return new String($c($bindings));

    }
}