<?php

/**
 *
 * timestamp: Dec 22, 2012 6:59:58 PM
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
 */

namespace pelau\net\http;

use pelau\php\Object;


class PostAdapter extends Object implements HttpListener
{

    /**
     * @var pelau\net\http\PostListener $l
     * @access private
     */
    private $l;

    /**
     * Constructs a new PostAdapter object.
     * @param \pelau\net\http\PostListener $l    The PostListener that will accept events.
     */
    public function __construct(PostListener $l)
    {

        $this->l = $l;

    }

    public function onGet(GetEvent $e)
    {

    }

    public function onPost(PostEvent $e)
    {

        $this->l->onPost($e);

    }

}