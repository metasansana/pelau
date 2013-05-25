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
use pelau\util\DataObject;

class HttpService
{

    /**
     *
     * @var \pelau\util\Map $list
     * @access private
     */
    private $list = ['GET' => array (), 'POST' => array (), 'PUT'=>array(), 'DELETE'=>array()];

    public function addGet(Resource $w)
    {

        $this->list['GET'][] = function () use ($w) {

                    $w->onGet(new Request, new Response, new DataObject($_GET));
                };

    }

    public function addPost(Resource $w)
    {

        $this->list['POST'][] = function() use ($w) {

                    $w->onPost(new Request, new Response, new DataObject($_POST));
                };

    }

    public function addPut(Resource $w)
    {

        $_PUT = array ();


       parse_str(file_get_contents('php://input'), $_PUT);

        $this->list['PUT'][] = function() use ($w, $_PUT) {

                    $w->onPut(new Request, new Response, new DataObject($_PUT));
                };

    }

    public function addDelete(Resource $w)
    {

        $this->list['DELETE'][] = function() use ($w) {

                    $w->onDelete(new Request, new Response);
                };

    }

    public function service()
    {

        $runners = $this->list[$_SERVER['REQUEST_METHOD']];

        foreach ($runners as $f)
        {
            $f();
        }

    }

}