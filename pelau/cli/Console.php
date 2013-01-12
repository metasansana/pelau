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
 * @package proof\cli;
 *
 * Class for reading and writing to the console.
 *
 */

namespace pelau\cli;

final class Console extends \pelau\php\Object
{


    /**
     * Writes a text to the console.
     * @param string $text
     * @return \pelau\cli\Console
     */
    public function write($text)
    {

        fwrite(STDIN, $text);
        return $this;

    }

    /**
     * Writes a line of text to the console.
     * @param string $text
     * @return \pelau\cli\Console
     */
    public function writeLine($text)
    {

        return $this->write($text.PHP_EOL);

    }

    /**
     * Reads a line of input form the console.
     * @return mixed    The line read from the console.
     */
    public function readLine()
    {
        return (new \pelau\php\String(fgets(STDIN)))->trim();
    }


    /**
     * Factory method for creating Console classes.
     * @return \pelau\cli\Console
     */
    static function getConsole()
    {
        return new Console;
    }


}