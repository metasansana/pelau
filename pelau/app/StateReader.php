<?php

/**
 *
 * timestamp: May 11, 2013 9:25:04 PM
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
 * Class for reading state.
 */

namespace pelau\app;

use pelau\util\Map;

class StateReader
{

    static public function getCookies()
    {

        $cok = $_COOKIE;

        return new Map($cok);

    }

    static public function getSession($start = true)
    {

        if (session_status() != PHP_SESSION_ACTIVE)
                session_start();

        $ses = $_SESSION;


        return new Map($ses);

    }

}