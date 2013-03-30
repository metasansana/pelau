<?php

/**
 *
 * timestamp: Mar 30, 2013 10:33:33 AM
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
 * Interface representing rows returned from a query.
 */
namespace pelau\sql;


interface RowSet
{

    /**
     * Fetches all the rows from a query's result.
     * @return pelau\util\ArrayList
     */
    public function fetchRows();

    /**
     * Reads all the rows from a query's result, making them available one by one.
     * @param \pelau\sql\RowListener $rdr
     */
    public function readRows(RowListener $rdr);


}