<?php

/**
 *
 * timestamp: May 3, 2013 10:27:09 PM
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
 * @package pelau\app;
 */
namespace pelau\app;

class WebService implements RESTful
{

    final public function launch()
    {

        $http = new HttpService;
        $http->addGet($this);
        $http->addPost($this);
        $http->addPut($this);
        $http->addDelete($this);
        $http->service();

    }

    public function onDelete(\pelau\net\http\Request $req, \pelau\net\http\Response $res)
    {

    }

    public function onGet(\pelau\net\http\Response $res, \pelau\net\http\Request $req)
    {

    }

    public function onPost(\pelau\net\http\Request $req, \pelau\net\http\Response $res)
    {

    }

    public function onPut(\pelau\net\http\Request $req, \pelau\net\http\Response $res)
    {

    }
}