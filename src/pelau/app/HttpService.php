<?php

/**
 *
 * timestamp: Apr 14, 2013 1:15:06 PM
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
 * Class  for launching Applications.
 */
namespace pelau\app;

use pelau\net\http\Response;
use pelau\net\http\Request;

class HttpService
{

    /**
     *
     * @var \pelau\util\Map $list
     * @access private
     */
    private $list = ['GET'=>array(), 'POST'=>array()];


    public function addGet(\pelau\net\http\HttpListener $l)
    {

        $this->list['GET'][] = function () use ($l) {

                    $l->onGet(new Response, new Request($_GET));
                };

    }

    public function addPost(WebService $w)
    {

        $this->list['POST'][] = function() use ($w){

                    $w->onPost(new Response, new Request($_POST));
                };

    }

      public function addPut(WebService $w)
    {

        $this->list['PUT'][] = function() use ($w){

                    $w->onPut(new Response, new Request([]));
                };

    }

    public function addDelete(WebService $w)
    {

        $this->list['DELETE'][] = function() use ($w){

                    $w->onDelete(new Response, new Request([]));
                };

    }

    public function service()
    {

        $runners = $this->list[$_SERVER['REQUEST_METHOD']];

        foreach($runners as $f)
        {
            $f();
        }





    }

}