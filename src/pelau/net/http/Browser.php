<?php

/**
 *
 * timestamp: Dec 22, 2012 5:43:57 PM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
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
 * @package pelau\web
 *
 *  Class representing a client browser.
 */

namespace pelau\net\http;

use pelau\util\Map;
use pelau\php\Object;

class Browser extends Object implements HttpSource
{


    /**
     * Internal HttpEventDispatcher.
     * @var pelau\web\HttpDispatcher $dispatch
     * @access private
     */
    private $dispatch;


    public function __construct()
    {

        $this->dispatch = new HttpEventGenerator($this);

    }

    public function addListener(HttpListener $l)
    {

        $this->dispatch->addListener($l);

        return $this;

    }

    /**
     * Simulates the UserAgent making a request to the application.
     */
    public function submit()
    {

        $this->dispatch->fire();

    }

    public function getUAString()
    {

        return HttpRequest::getProperty("USER_AGENT");

    }

    public function getCookies()
    {

        return new Map($_COOKIE);

    }

    public function getRemoteAddress()
    {

        return HttpRequest::getProperty("REMOTE_ADDRESS");

    }

    public function set(Header $h);
    
    public function redirect($location, $timer = null)
    {
          throw new pelau\php\UnsupportedOperationException;
    }

}