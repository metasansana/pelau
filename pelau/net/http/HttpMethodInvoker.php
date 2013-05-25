<?php

/**
 *
 * timestamp: Mar 3, 2013 3:01:11 AM
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
 * @package pelau\net\http
 *
 *  Parent class of HttpInvokers that actually invoke methods on listeners.
 */
namespace pelau\net\http;

abstract class HttpMethodInvoker extends \pelau\php\Object implements HttpInvoker
{

    /**
     * The Browser class that will be passed to listeners.
     * @var \pelau\net\http\Response $client
     * @access private
     */
    protected $client;

    public function __construct(Response $client)
    {
        $this->client = $client;
    }

}