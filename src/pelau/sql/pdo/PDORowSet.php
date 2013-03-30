<?php

/**
 *
 * timestamp: Mar 27, 2013 9:47:14 PM
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
 */
namespace pelau\sql\pdo;

class PDORowSet implements \pelau\sql\RowSet
{

    /**
     * The PDOStatement class the rows come from.
     * @var \PDOStatement $stmt
     *  @access private
     */
    private $stmt;

    /**
     * Constructs a new PDOResultSet.
     * @param \PDOStatement $stmt
     */
    public function __construct(\PDOStatement $stmt)
    {

        $this->stmt = $stmt;

    }

    public function getRows()
    {

        return new \pelau\util\ArrayList($this->stmt->fetchAll());

    }

    public function fetchRows(\pelau\sql\RowListener $rdr)
    {

        foreach($this->stmt as $row)
            $rdr->onRowFetched($row);

    }


}