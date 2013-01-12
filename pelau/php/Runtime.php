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

class Runtime
{


    /**
     *  Returns a runtime object associated with the current application.
     * @return \pelau\php\Runtime
     */
    static public function getRuntime()
    {
        return new Runtime();
    }

    /**
     * Returns the command line arguments this program was started with (if any).
     * @return pelau\util\ArrayList
     */
    public function getArguments()
    {
        global $argv; //ewwww
        return new ArrayList($argv);
    }

}