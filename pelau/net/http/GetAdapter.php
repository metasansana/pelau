<?php

/**
 *
 * timestamp: Dec 22, 2012 7:07:23 PM
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
 * @package pelau\net\http;
 *
 *
 */

namespace pelau\net\http;


class GetAdapter implements HttpListener
{

    /**
     *
     * @var pelau\net\http $l
     * @access private
     */
    private $l;

    public function __construct(GetListener $l)
    {

        $this->l = $l;

    }
    public function onGet(GetEvent $e)
    {
        $this->l->onGet($e);
    }

    public function onPost(PostEvent $e)
    {

    }
}