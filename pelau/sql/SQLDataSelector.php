<?php

/**
 *
 * timestamp: Dec 4, 2012 4:22:36 AM
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
 * Class for customising general sql queries.
 */

namespace pelau\sql;

use pelau\util\Map;


class SQLDataSelector
{

    /**
     * Generates the required sql.
     * @var pelau\sql\SQLTemplate $c
     * @access private
     */
    private $tmpl;

    /**
     * Contains the bindings for the compiler.
     * @var pelau\util\Map $map
     * @access private
     */
    private $map;

    /**
     * SQLConnection associated.
     * @var pelau\sql\SQLConnection $con
     * @access private
     */
    private $con;



    public function __construct(SQLTemplate $factory)
    {

        $this->tmpl = $factory;
        $this->map = new Map;


    }


 public function offset($low, $high)
    {

        $low = (int)$low;

        $high = (int)$high;

        $this->map->add("offset", "$low, $high");

        return $this;

    }

    public function select($cols)
    {
        if($cols)
        {
            if($this->map->indexAt('select'))
            {
                $prev = $this->map->get('select');
                $cols = "$prev, $cols";
            }

        $this->map->add('select', $cols);
        }


        return $this;

    }

    public function orderBy($clause)
    {

        $this->map->add('orderby', "$clause");

        return $this;

    }


    public function toStatement(\pealu\sql\SQLConnection $con)
    {

        return $con->prepare((string)$this->tmpl->toSQL(new SQLSelectorAdapter($this->map)));

    }
}