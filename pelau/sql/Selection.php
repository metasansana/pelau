<?php
/**
 *
 * timestamp: Dec 2, 2012 9:59:51 PM
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
 * @package pelau\sql;
 *
 * Interface for generating sql queries.
 *
 *
 */

namespace pelau\sql;

interface Selection
{

    /**
     * Restricts the retrieved rows to the the columns specified.
     * @param string $cols    A comma seperated list of columns of interest.
     * @return pelau\sql\Selection
     */
    public function select($cols);

    /**
     * Restricts the retrieved rows to specific limits.
     * @param int $low
     * @param int $high
     * @return pelau\sql\Selection
     */
    public function offset($low, $high);

    /**
     *  Orders the retrieved rows according to the specified clause.
     * @param string $clause
     * @return pelau\sql\Selection
     */
    public function orderBy($clause);

    /**
     * Generates an SQL Statement modified by the options of this class.
     * @return pelau\sql\PreparedStatement
     */
    public function toStatement();

}