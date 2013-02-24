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

class Browser extends Object implements HttpClient
{


    /**
     * Internal HttpEventDispatcher.
     * @var pelau\web\HttpDispatcher $dispatch
     * @access private
     */
    private $dispatch;

    /**
     *
     * @var \pelau\net\http\HttpRequest $request
     */
    private $request;

    /**
     *
     * @var \pelau\net\http\HttpResponse $response;
     */
    private $response;




    public function __construct()
    {

        $this->request = new HttpRequest;
        $this->response = new HttpResponse;
        $this->dispatch = new HttpEventGenerator($this, $this->request);


    }

    public function addListener(HttpListener $l)
    {

        $this->dispatch->addListener($l);

        return $this;

    }

    public function browse()
    {

        $this->dispatch->fire();

    }

    public function redirect(HttpLocation $l, $status)
    {

        $l->go($this->response, $status);

        return $this;

    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getResponse()
    {
        return $this->response;
    }

}