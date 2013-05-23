<?php

/**
 *
 * timestamp: May 3, 2013 10:30:10 PM
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
 */
namespace pelau\app;

use pelau\net\http\Request;
use pelau\net\http\Response;
use pelau\util\DataObject;


interface RESTful
{

    public function onPost(Request $req, Response $res, DataObject $post);

    public function onPut(Request $req, Response $res, DataObject $put);

    public function onGet(Request $req, Response $res, DataObject $get);

    public function onDelete(Request $req, Response $res, DataObject $delete);

}