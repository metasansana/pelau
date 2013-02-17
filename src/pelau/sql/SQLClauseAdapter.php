<?php

/**
 *
 * timestamp: Jan 26, 2013 10:10:53 AM
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
 * @package pelau\sql
 *
 *  Class used to get properly formatted symbols for use in sql queries.
 */
namespace pelau\sql;

class SQLClauseAdapter
{

    /**
     * The Map object containing the symbols desired.
     * @var pelau\php\Map $map
     * @access private
     */
    private $map;

    public function __construct(\pelau\util\Map $map)
    {
        $this->map = $map;
    }

    private function _check($clause)
    {

        if($this->map->contains($clause))
            return true;
    }

    public function getSelect()
    {

        if($this->_check('select'))
        return " {$this->map['select']}";
    }

    public function getOffset()
    {

        if($this->_check('offset'))
        return " LIMIT {$this->map['offset']}";

    }

    public function getOrderBy()
    {
        if($this->_check('orderby'))
        return " ORDER BY {$this->map['orderby']}";
    }



}