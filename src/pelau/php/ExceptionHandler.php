<?php

/**
 *
 * timestamp: Jan 12, 2013 2:39:34 PM
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
 *  This class allows the use of a global exception handler.
 */
namespace pelau\php;

class ExceptionHandler
{

    /**
     * An anonymous function that is called when an exception is uncaught.
     * @var \Closure $trap
     * @access private
     */
    static private $f;

    static public function setHandler(\Closure $f)
    {
        self::$f = $f;
    }

    static public function onException(\Exception $e)
    {
       $f = self::$f;
        return $f($e);
    }

}