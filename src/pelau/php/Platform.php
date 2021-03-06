<?php

/**
 *
 * timestamp: Jan 12, 2013 5:19:32 PM
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
 * @package pelau\php;
 *
 * Convience class that contains static methods for useful PHP features.
 */
namespace pelau\php;

class Platform
{


    static public function parseINI($filename, $map=true)
    {

        //the prototype is to be changed in future.

        if($map)
            return new \pelau\util\Map(parse_ini_file($filename, true));

        return parse_ini_file($filename, true);

    }

}