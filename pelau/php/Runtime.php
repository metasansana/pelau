<?php

/**
 *
 * timestamp: Jan 12, 2013 12:25:33 PM
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
 * @package pelau\php
 *
 *  Class representing a runtime instance of the program.
 */
namespace pelau\php;

use pelau\util\ArrayList;

class Runtime extends Object
{

    /**
     * End execution of this program.
     * @param int $status
     * @param string $message
     */
    static public function halt($message=null, $status=0)
    {

        if($message)
            echo $message.PHP_EOL;

        exit((int)$status);

    }

    static public function import($file, array $vars=array())
    {

        if($vars)
            extract ($vars);

            if(!(include_once "$file"))
            throw new \pelau\io\FileNotFoundException($file);

    }

    static public  function parseFile($file, array $vars=array())
    {

        if($vars)
            extract ($vars);

        $data = include_once "$file";
        return $data;

    }




    static public function parseINI($filename, $map=true)
    {

        //the prototype is to be changed in future.

        if($map)
            return new \pelau\util\Map(parse_ini_file($filename, true));

        return parse_ini_file($filename, true);

    }

}