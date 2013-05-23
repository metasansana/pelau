<?php

/**
 *
 * timestamp: Mar 9, 2013 11:48:43 PM
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
 * @package pelau\app
 *
 *  Class representing the path accessed through a Web application.
 */

namespace pelau\app;


class WebPath
{

    /**
     * String object representing the given path.
     * @var \pelau\php\String $path
     * @access private
     */
    private $path;

    public function __construct(\pelau\php\String $path)
    {

        $this->path = $path;

    }

    public function toArrayList()
    {

        return $this->path->split('/')->remove(0);

    }

    public function __toString()
    {
        return (string) $this->path;

    }

}