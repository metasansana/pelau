<?php
/**
 *
 * timestamp: Dec 8, 2012 2:54:37 PM
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
 * @package proof\io;
 *
 * Static class providing access to the cli io.
 *
 */

namespace proof\io;

use proof\php\String;


class Console
{


    /**
     * Reads a line from STDIN.
     * @return proof\php\String  A line read with superflous whitespace removed.
     */
    static public function readLine()
    {

        return new String(fgetss(STDIN));

    }

    /**
     * Writes a string to STDIN
     * @param string $string The string to be written to STDIN.
     */
    static public function write($string)
    {
        return fwrite(STDIN, (string)$string);
    }




}