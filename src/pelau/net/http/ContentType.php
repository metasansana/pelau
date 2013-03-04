<?php

/**
 *
 * timestamp: Mar 4, 2013 4:03:57 AM
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
 * @package pelau\http
 *
 * Class for sending a Content-type header.
 */
namespace pelau\net\http;

class ContentType extends Header
{

    const PLAIN = 'text/plain';

    const HTML = 'text/html';

    const JSON =  'application/json';



  public function __construct($value)
  {

      parent::__construct("Content-type: $value");

  }

}