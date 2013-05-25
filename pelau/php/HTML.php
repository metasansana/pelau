<?php

/**
 *
 * timestamp: Apr 20, 2013 6:02:44 AM
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
 *
 *  Class for sanitizing html.
 * @package pelau\php
 */
namespace pelau\php;

class HTML
{

    /**
     *
     * @var
     * @access
     */


    public function sanitize($html)
    {

        return  htmlentities(mb_convert_encoding($html, 'UTF-8', 'UTF-8'′), ENT_QUOTES, 'UTF-8');


    }

}