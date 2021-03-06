<?php

/**
 *
 * timestamp: Jan 21, 2013 9:04:09 PM
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
 * @package pelau\util
 *
 * Interface for implementing a Command pattern.
 */
namespace pelau\util;


interface Command
{

    /**
     * Returns the result of executing this command.
     * @return boolean
     */
    public function execute();


}