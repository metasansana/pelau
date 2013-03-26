<?php

/**
 *
 * timestamp: Mar 25, 2013 4:46:43 AM
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
 * Interface for executing sql code.
 */
namespace pelau\sql;


interface SQLClient
{

    /**
     * Performs a query on the database.
     * @param \pelau\sql\Statement $sql
     */
    public function create($sql);

    /**
     * Creates a PreparedStatement class from an String.
     * @param string $sql    SQL statement in string form.
     * @return pelau\sql\PreparedStatement    The PreparedStatement.
     */
    public function prepare($sql);



}